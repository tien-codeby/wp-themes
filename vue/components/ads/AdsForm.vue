<template>
  <ValidationObserver v-slot="{ handleSubmit }">

  <div id="formDangMuMoi" @submit.prevent="handleSubmit(onSubmit)">
    Ghi chú: <label class="col-form-label text-danger font-italic">(*)</label> nghĩa là nội dung bắt buộc phải điền.

    <AdsFormItem name="Tên MU" :rules="rules.ten_mu.rules" required :custom-messages="rules.ten_mu.messages">
      <input
          v-model="form.ten_mu"
          type="text"
          class="form-control form-control-sm"
          id="gameName"
          name="gameName"
          placeholder="Tên mu mới (vd: Mu Vệ Binh)"
          alt="Tên mu mới (vd: Mu Vệ Binh)"
          title="Tên mu mới (vd: Mu Vệ Binh)"
          autocomplete="off"
          maxlength="20"
          autofocus=""
      />
    </AdsFormItem>

    <AdsFormItem name="Trang Chủ" :rules="rules.trang_chu.rules" required :custom-messages="rules.trang_chu.messages">
      <input
          v-model="form.trang_chu"
          type="url"
          class="form-control form-control-sm"
          id="gamePage"
          name="gamePage"
          placeholder="Trang chủ game mu của bạn"
          alt="Trang chủ game mu của bạn"
          title="Trang chủ game mu của bạn"
          autocomplete="off"
          maxlength="100"
      />
    </AdsFormItem>

    <AdsFormItem name="Fanpage">
      <input
          v-model="form.fanpage_ho_tro"
          type="url"
          class="form-control form-control-sm"
          id="gameFanpage"
          name="gameFanpage"
          placeholder="Trang fanpage của mu"
          alt="Trang fanpage của mu"
          title="Trang fanpage game mu của bạn"
          autocomplete="off"
          maxlength="100"
      />
    </AdsFormItem>

    <AdsFormItem name="Phiên Bản" :rules="rules.phien_ban.rules" required :custom-messages="rules.phien_ban.messages">
      <select v-model="form.phien_ban" class="form-control form-control-sm" id="gameVer" name="gameVer">
        <option value="" selected="" disabled="" hidden="">Chọn phiên bản Mu Online</option>
        <option v-for="(item, index) in gameVer" :key="index" :value="item.value">
          {{ item.label }}
        </option>
      </select>
    </AdsFormItem>


    <AdsFormItem name="Loại MU">
      <div class="custom-control custom-radio custom-control-inline">
        <input v-model="form.loai_mu" type="radio" class="custom-control-input" id="muReset" name="gameType" value="reset" alt="Mu Reset"/>
        <label class="custom-control-label" for="muReset">Reset</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input v-model="form.loai_mu" type="radio" class="custom-control-input" id="muNonReset" name="gameType" value="nonReset" alt="Mu Non Reset" />
        <label class="custom-control-label" for="muNonReset">Non Reset</label>
      </div>
    </AdsFormItem>


    <AdsFormItem name="Tên Máy Chủ" :rules="rules.ten_may_chu.rules" required :custom-messages="rules.ten_may_chu.messages">
      <input
          v-model="form.ten_may_chu"
          type="text"
          class="form-control form-control-sm"
          id="gameServer"
          name="gameServer"
          placeholder="Tên máy chủ Mu (Vd: máy chủ Lorencia)"
          alt="Tên máy chủ Mu (Vd: máy chủ Lorencia)"
          title="Tên máy chủ Mu (Vd: máy chủ Lorencia)"
          autocomplete="off"
      />
    </AdsFormItem>

    <AdsFormItem name="Miêu Tả MU" :rules="rules.mieu_ta_mu.rules" required :custom-messages="rules.mieu_ta_mu.messages">
      <input
          v-model="form.mieu_ta_mu"
          type="text"
          class="form-control form-control-sm"
          id="gameDescription"
          name="gameDescription"
          placeholder="Miêu tả ngắn gọn (vd: Miễn phí 99%, không webshop, cày cuốc)"
          alt="Miêu tả ngắn gọn (vd: Miễn phí 99%, không webshop, cày cuốc)"
          title="Miêu tả ngắn gọn (vd: Miễn phí 99%, không webshop, cày cuốc)"
          autocomplete="off"
          maxlength="35"
      />
    </AdsFormItem>


    <AdsFormItem name="Alpha Test">
      <template #full>
        <div class="col-3 col-md-2 col-lg-2">
          <date-picker v-model="form.alpha_test" format="DD/MM/YYYY HH:mm" type="datetime" placeholder="Thời gian Alpha Test"></date-picker>
        </div>
      </template>
    </AdsFormItem>


    <AdsFormItem name="Open Beta" :rules="rules.open_beta.rules" required :custom-messages="rules.open_beta.messages">
      <template #full>
        <div class="col-3 col-md-2 col-lg-2">
          <date-picker v-model="form.open_beta" format="DD/MM/YYYY HH:mm" type="date" placeholder="Thời gian Open Beta"></date-picker>
        </div>
      </template>
    </AdsFormItem>


    <AdsFormItem name="Exp" :rules="rules.exp.rules" required :custom-messages="rules.exp.messages">
      <template #full>
        <div class="col-3 col-md-3 col-lg-3">
          <input
              v-model="form.exp"
              type="number"
              class="form-control form-control-sm"
              id="gameExp"
              name="gameExp"
              placeholder="Exp rate"
              alt="Exp rate (điểm kinh nghiệm) game mu của bạn (vd: 1x, 5x, 100x)"
              title="Exp rate (điểm kinh nghiệm) game mu của bạn (vd: 1x, 5x, 100x)"
              autocomplete="off"
              maxlength="10"
          />
        </div>
        <label class="col-1 col-md-1 col-lg-1 col-form-label">x</label>
        <label class="col-4 col-md-4 col-lg-4 col-form-label">(vd: 1x, 5x, 100x, 500x, 9999x)</label>
      </template>
    </AdsFormItem>

    <AdsFormItem name="Drop" :rules="rules.drop.rules" required :custom-messages="rules.drop.messages">
      <template #full>
        <div class="col-3 col-md-3 col-lg-3">
          <input
              v-model="form.drop"
              type="number"
              class="form-control form-control-sm"
              id="gameDrop"
              name="gameDrop"
              placeholder="Drop rate"
              alt="Drop rate (tỉ lệ rớt đồ) game mu (vd: 20%, 40%, 80%)"
              title="Drop rate (tỉ lệ rớt đồ) game mu (vd: 20%, 40%, 80%)"
              autocomplete="off"
              maxlength="10"
          />
        </div>
        <label class="col-1 col-md-1 col-lg-1 col-form-label">%</label>
        <label class="col-4 col-md-4 col-lg-4 col-form-label">(vd: 10%, 40%, 50%, 80%)</label>
      </template>
    </AdsFormItem>

    <AdsFormItem name="Anti Hack">
      <input
          v-model="form.anti_hack"
          type="text"
          class="form-control form-control-sm"
          id="gameAntiHack"
          name="gameAntiHack"
          placeholder="Antihack mà game sử dụng (vd: Gameguard, UGK, CheatGuard)"
          alt="Antihack mà game sử dụng (vd: Gameguard, UGK, CheatGuard)"
          title="Antihack mà game sử dụng (vd: Gameguard, UGK, CheatGuard)"
          autocomplete="off"
          maxlength="40"
      />
    </AdsFormItem>


    <div class="form-group row" id="form_gameDetail">
      <label for="inputEditor" class="col-12 col-md-12 col-lg-12 col-form-label">
        Miêu tả chi tiết game Mu Online của bạn <span class="text-danger" style="font-style: italic; font-size: 13px;">(*)</span>: bài viết càng chi tiết sẽ càng thu hút nhiều người xem
      </label>
    </div>

    <div class="form-group row">
      <div class="col-sm-12">
        <vue2-tinymce-editor v-model="content" ref="editor" :height="700" :options="options"></vue2-tinymce-editor>
      </div>
    </div>

  </div>

  </ValidationObserver>

</template>

<script>
import betaHour from '../../context/betaHour.json'
import gameVer from '../../context/gameVer.json'
import testHour from '../../context/testHour.json'
import rules from "../../context/rules"

import { Vue2TinymceEditor } from "vue2-tinymce-editor"

import {ValidationProvider, extend, ValidationObserver} from 'vee-validate';
import { required, min_value } from 'vee-validate/dist/rules';

extend('required', {
  ...required
});
extend('min_value', {
  ...min_value
})

import DatePicker from 'vue2-datepicker'
import 'vue2-datepicker/index.css'
import 'vue2-datepicker/locale/vi';

import AdsFormItem from './AdsFormItem.vue'

export default {
  name: "AdsForm",
  components: {
    ValidationProvider,
    AdsFormItem,
    ValidationObserver,
    DatePicker,
    Vue2TinymceEditor
  },
  data() {
    return {
      betaHour,
      gameVer,
      testHour,
      content: "<h1>Some initial content</h1>",
      form: {
        ten_mu: '',
        trang_chu: '',
        fanpage_ho_tro: '',
        phien_ban: '',
        loai_mu: '',
        ten_may_chu: '',
        mieu_ta_mu: '',
        alpha_test: '',
        open_beta: '',
        exp: '',
        drop: '',
        anti_hack: ''
      },
      rules,
      options: {
        plugins: 'preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save | image media link',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        importcss_append: true,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image imagetools table',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
        /* enable title field in the Image dialog*/
        image_title: true,
        /* enable automatic uploads of images represented by blob or data URIs*/
        automatic_uploads: true,
        file_picker_types: 'image',
        file_picker_callback: function (cb, value, meta) {
          var input = document.createElement('input');
          input.setAttribute('type', 'file');
          input.setAttribute('accept', 'image/*');

          /*
            Note: In modern browsers input[type="file"] is functional without
            even adding it to the DOM, but that might not be the case in some older
            or quirky browsers like IE, so you might want to add it to the DOM
            just in case, and visually hide it. And do not forget do remove it
            once you do not need it anymore.
          */

          input.onchange = function () {
            var file = this.files[0];

            var reader = new FileReader();
            reader.onload = function () {
              /*
                Note: Now we need to register the blob in TinyMCEs image blob
                registry. In the next release this part hopefully won't be
                necessary, as we are looking to handle it internally.
              */
              var id = 'blobid' + (new Date()).getTime();
              var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
              var base64 = reader.result.split(',')[1];
              var blobInfo = blobCache.create(id, file, base64);
              blobCache.add(blobInfo);

              /* call the callback and populate the Title field with the file name */
              setTimeout(() => {
                cb(blobInfo.blobUri(), { title: file.name });
              }, 5000)
            };
            reader.readAsDataURL(file);
          };

          input.click();
        }
      }
    }
  },
  methods: {
    onSubmit() {
      console.log(`1234`)
    }
  }
}
</script>
