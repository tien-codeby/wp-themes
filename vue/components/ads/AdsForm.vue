<template>

  <div class="con-form">
    <ValidationObserver v-slot="{ handleSubmit }">

      <form id="formDangMuMoi" @submit.prevent="handleSubmit(onSubmit)">
        Ghi chú: <label class="col-form-label text-danger font-italic">(*)</label> nghĩa là nội dung bắt buộc phải điền.

        <AdsFormItem name="Tên MU" :rules="rules.ten_mu.rules" required :custom-messages="rules.ten_mu.messages">
          <input
              v-model="form.title"
              type="text"
              class="form-control form-control-sm"
              id="gameName"
              name="gameName"
              placeholder="Tên mu mới (vd: Mu Vệ Binh)"
              alt="Tên mu mới (vd: Mu Vệ Binh)"
              title="Tên mu mới (vd: Mu Vệ Binh)"
              autocomplete="off"
              maxlength="80"
              autofocus=""
          />
        </AdsFormItem>

        <AdsFormItem name="Email" :rules="rules.email.rules" required :custom-messages="rules.email.messages">
          <input
              v-model="form.email"
              type="text"
              class="form-control form-control-sm"
              placeholder="Email người dăng bài"
              autocomplete="off"
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
          <select v-model="form.season" class="form-control form-control-sm" id="gameVer" name="gameVer">
            <option value="" selected="" disabled="" hidden="">Chọn phiên bản Mu Online</option>
            <option v-for="(item, index) in gameVer" :key="index" :value="item.value">
              {{ item.label }}
            </option>
          </select>
        </AdsFormItem>


        <AdsFormItem name="Loại MU">
          <div class="custom-control custom-radio custom-control-inline">
            <input v-model="form.mu_theo_loai" type="radio" class="custom-control-input" id="muReset" name="gameType" value="reset" alt="Mu Reset"/>
            <label class="custom-control-label" for="muReset">Reset</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input v-model="form.mu_theo_loai" type="radio" class="custom-control-input" id="muNonReset" name="gameType" value="nonReset" alt="Mu Non Reset" />
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
              <date-picker v-model="form.open_beta" format="DD/MM/YYYY HH:mm" type="datetime" placeholder="Thời gian Open Beta"></date-picker>
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
            <TinyEditor ref="editor" />
          </div>
        </div>

        <div class="form-group row">
          <div class="col-5 col-md-3 col-lg-3">
            <vue-recaptcha
                ref="recaptcha"
                sitekey="6Lfy6LAfAAAAAGsCTt6x8SPqgnkDgm-LxHESh1YN"
                @verify="canUpload = true"
                @error="canUpload = false"
                @expired="canUpload = false"
            ></vue-recaptcha>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-5 col-md-3 col-lg-3">
            <button :disabled="!canUpload" type="submit" class="btn btn-sm btn-dangMuMoi" id="btnDangMuMoi">Đăng Mới</button>

          </div>
          <div class="col-5 col-md-3 col-lg-3">
            <button @click="previewPost()" type="button" class="btn btn-sm btn-xemThuBaiViet" id="btnPreviewDangMuMoi">Xem thử bài viết</button>
          </div>
        </div>

      </form>

    </ValidationObserver>

    <p style="color: #8256c5; font-weight: 600; margin-top: 20px;">Lưu ý:</p>
    <ul>
      <li>Các Mu có bài giới thiệu sơ sài sẽ không được duyệt</li>
      <li>Bài viết bạn gửi sẽ được đăng lên trong vòng không quá 24h</li>
      <li>Bài viết của bạn phải điền đầy đủ các thông tin bắt buộc</li>
      <li>Các mu với tên miền miễn phí (vd: myvnc.com, no-ip.com...) sẽ không được duyệt.</li>
      <li>Nếu có bất kỳ thắc mắc nào, bạn vui lòng <a href="/lien-he/" title="Liên hệ trực tiếp với hỗ trợ của website Mumoira.info">liên
        hệ trực tiếp</a> để được hỗ trợ.
      </li>
    </ul>
    <hr/>
    <div v-if="showPreview" id="xemthu">
      <p style="color: #5665c5; font-weight: 600; margin-top: 20px;">Xem trước:</p>

      <ul>
        <li>Tên MU: {{ preview.title }}</li>
        <li>Trang Chủ: {{ preview.trang_chu }}</li>
        <li>Fabpage: {{ preview.fanpage_ho_tro }}</li>
        <li>Phiên Bản: {{ preview.season }}</li>
        <li>Loại MU: {{ preview.mu_theo_loai }}</li>
        <li>Tên Máy Chủ: {{ preview.ten_may_chu }}</li>
        <li>Miêu Tả MU: {{ preview.mieu_ta_mu }}</li>
        <li>Alpha Test: {{ preview.alpha_test }}</li>
        <li>Open Beta: {{ preview.open_beta }}</li>
        <li>Exp: {{ preview.exp }}</li>
        <li>Drop: {{ preview.drop }}</li>
        <li>Anti Hack: {{ preview.anti_hack }}</li>
      </ul>

      <div v-html="preview.content" />

    </div>

  </div>

</template>

<script>
import betaHour from '../../context/betaHour.json'
import gameVer from '../../context/gameVer.json'
import testHour from '../../context/testHour.json'
import rules from "../../context/rules"

import { VueRecaptcha } from 'vue-recaptcha'

import {ValidationProvider, extend, ValidationObserver} from 'vee-validate';
import { required, min_value, email } from 'vee-validate/dist/rules';

extend('required', {
  ...required
});
extend('min_value', {
  ...min_value
})
extend('email', {
  ...email
})

import DatePicker from 'vue2-datepicker'
import 'vue2-datepicker/index.css'
import 'vue2-datepicker/locale/vi';

import AdsFormItem from './AdsFormItem.vue'
import TinyEditor from "./TinyEditor.vue";

import dayjs from 'dayjs'
import utc from 'dayjs/plugin/utc'
import timezone from 'dayjs/plugin/timezone'
import customParseFormat from 'dayjs/plugin/customParseFormat'

dayjs.extend(customParseFormat)
dayjs.extend(utc)
dayjs.extend(timezone)
dayjs.tz.setDefault('Asia/Ho_Chi_Minh')

export default {
  name: "AdsForm",
  components: {
    TinyEditor,
    ValidationProvider,
    AdsFormItem,
    ValidationObserver,
    DatePicker,
    VueRecaptcha
  },
  data() {
    return {
      betaHour,
      gameVer,
      testHour,
      form: {
        title: '',
        email: '',
        trang_chu: '',
        fanpage_ho_tro: '',
        season: '',
        content: '',
        mu_theo_loai: '',
        ten_may_chu: '',
        mieu_ta_mu: '',
        alpha_test: '',
        open_beta: '',
        exp: '',
        drop: '',
        anti_hack: ''
      },
      preview: {
        title: '',
        email: '',
        trang_chu: '',
        fanpage_ho_tro: '',
        season: '',
        content: '',
        mu_theo_loai: '',
        ten_may_chu: '',
        mieu_ta_mu: '',
        alpha_test: '',
        open_beta: '',
        exp: '',
        drop: '',
        anti_hack: ''
      },
      rules,
      canUpload: false,
      showPreview: false
    }
  },
  methods: {
    async onSubmit() {
      this.form.content = this.$refs.editor.getContent()
      this.canUpload = false
      try {

        const form = new FormData()
        form.append('action', 'custom_game_create_action')

        Object.entries(this.form).forEach((value) => {
          form.append(value[0], value[1])
        })

        await this.$http.post('/wp-admin/admin-ajax.php', form)

        this.form = {
          title: '',
          trang_chu: '',
          fanpage_ho_tro: '',
          season: '',
          content: '',
          mu_theo_loai: '',
          ten_may_chu: '',
          mieu_ta_mu: '',
          alpha_test: '',
          open_beta: '',
          exp: '',
          drop: '',
          anti_hack: ''
        }

        this.$refs.editor.reset()

        window.location.href = '/dang-quang-cao-thanh-cong/'

      } catch (e) {}
      this.canUpload = true
    },
    previewPost() {
      this.form.content = this.$refs.editor.getContent()
      this.preview = Object.assign({}, this.form)

      this.preview.alpha_test = dayjs(this.preview.alpha_test).format('DD/MM/YYYY hh:mm')
      this.preview.open_beta = dayjs(this.preview.open_beta).format('DD/MM/YYYY hh:mm')

      this.showPreview = true
    }
  },
}
</script>
