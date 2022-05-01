<template>
  <textarea id="noveleditor"></textarea>
</template>

<script>
export default {
  name: "TinyEditor",
  data() {
    return {
      imageTemp: []
    }
  },
  mounted() {
    this.init()
  },
  methods: {

    init() {

      const images_upload_handler = async (blobInfo, success, failure, progress) => {

        const form = new FormData()

        form.append('action', 'codeby_upload_image')
        form.append('image', blobInfo.blob())

        try {

          const { data } = await this.$http.post('/wp-admin/admin-ajax.php', form)
          // window.test = success
          // success('https://codeby.xxx/wp-admin/admin-ajax.php');
          this.imageTemp.push({
            blob: blobInfo.blobUri(),
            url: data.data.data
          })
        } catch (e) {
          failure('Đăng tải thất bại');
        }
      }

      tinymce.init({
        selector: '#noveleditor',
        height: 700,
        language_url: '/wp-content/themes/mumoiravn.com/js/editor/vi.js',
        language: 'vi',
        plugins: 'advlist autolink lists link image charmap preview anchor pagebreak lists table emoticons autosave quickbars media',
        toolbar: 'undo redo | blocks fontfamily | ' +
            'bold italic forecolor backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'table media image emoticons | removeformat restoredraft help',
        toolbar_mode: 'floating',
        automatic_uploads: true,
        file_picker_types: 'image',

        contextmenu: 'link image table',

        file_picker_callback: (cb, value, meta) => {
          const input = document.createElement('input');
          input.setAttribute('type', 'file');
          input.setAttribute('accept', 'image/*');
          input.onchange = (e) => {
            const file = e.files[0];

            const reader = new FileReader();
            reader.onload = async () => {
              const id = 'blobid' + (new Date()).getTime();
              const blobCache = tinymce.activeEditor.editorUpload.blobCache;
              const base64 = reader.result.split(',')[1];
              const blobInfo = blobCache.create(id, file, base64);
              blobCache.add(blobInfo);
              console.log(13354)
              window.test2 = cb
              // cb(blobInfo.blobUri(), { title: '1234' });
            };
            reader.readAsDataURL(file);
          };

          input.click();
        },
        images_upload_handler
      })
    },

    getContent() {
      let text = window.tinymce.get('noveleditor').getContent()

      const $el = document.createElement('div')
      $el.innerHTML = text

      this.imageTemp.forEach((image) => {
       const $img = $el.querySelector(`img[src="${image.blob}"]`)
        if($img) {
          $img.setAttribute('src', image.url)
        }
      })
      return $el.outerHTML
    },

    reset() {
      window.tinymce.get('noveleditor').setContent('')
    }

  }
}
</script>
