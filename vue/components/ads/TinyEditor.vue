<template>
  <textarea id="inputEditor"></textarea>
</template>

<script>
export default {
  name: "TinyEditor",
  data() {
    return {
      anhtien: '124'
    }
  },
  mounted() {
    this.init()
  },
  methods: {

    init() {
      tinymce.init({
        selector: 'textarea',
        language_url: 'https://codeby.xxx/wp-content/themes/mumoira/js/editor/vi.js',
        language: 'vi',
        plugins: 'advlist autolink lists link image charmap preview anchor pagebreak lists table emoticons autosave quickbars',
        toolbar: 'undo redo | blocks fontfamily | ' +
            'bold italic forecolor backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'table image emoticons | removeformat restoredraft help',
        toolbar_mode: 'floating',
        automatic_uploads: true,
        file_picker_types: 'image',

        contextmenu: 'link image table',

        file_picker_callback: function (cb, value, meta) {
          const input = document.createElement('input');
          input.setAttribute('type', 'file');
          input.setAttribute('accept', 'image/*');

          input.onchange = function () {
            const file = this.files[0];

            const reader = new FileReader();
            reader.onload = function () {
              const id = 'blobid' + (new Date()).getTime();
              const blobCache = tinymce.activeEditor.editorUpload.blobCache;
              const base64 = reader.result.split(',')[1];
              const blobInfo = blobCache.create(id, file, base64);
              blobCache.add(blobInfo);

              /* call the callback and populate the Title field with the file name */
              // cb(blobInfo.blobUri(), { title: file.name });
            };
            reader.readAsDataURL(file);
          };

          input.click();
        }
      })
    }

  }
}
</script>
