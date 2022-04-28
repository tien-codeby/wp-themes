<template>
  <form id="formDangMuMoi">
    Ghi chú: <label class="col-form-label text-danger font-italic">(*)</label> nghĩa là nội dung bắt buộc phải điền.

    <div class="form-group row" id="form_gameName">
      <label for="inputTenMu" class="col-3 col-md-2 col-lg-2 col-form-label">Tên MU <span class="text-danger" style="font-style: italic; font-size: 13px;">(*)</span>:</label>
      <div class="col-9 col-md-8 col-lg-8">
        <input
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
      </div>
    </div>
    <div class="form-group row" id="form_gamePage">
      <label for="inputTrangChu" class="col-3 col-md-2 col-lg-2 col-form-label">Trang Chủ <span class="text-danger" style="font-style: italic; font-size: 13px;">(*)</span>:</label>
      <div class="col-9 col-md-8 col-lg-8">
        <input
            type="url"
            data-bv-uri-message="Link website không đúng định dạng"
            data-bv-uri-protocol="http;https"
            class="form-control form-control-sm"
            id="gamePage"
            name="gamePage"
            placeholder="Trang chủ game mu của bạn (vd: http://muonline.com)"
            alt="Trang chủ game mu của bạn (vd: http://muonline.com)"
            title="Trang chủ game mu của bạn"
            autocomplete="off"
            maxlength="100"
        />
      </div>
    </div>
    <div class="form-group row" id="form_gameFanpage">
      <label for="inputFanpage" class="col-3 col-md-2 col-lg-2 col-form-label">Fanpage Hỗ Trợ:</label>
      <div class="col-9 col-md-8 col-lg-8">
        <input
            type="url"
            data-bv-uri-message="Link fanpage không đúng định dạng"
            data-bv-uri-protocol="http;https"
            class="form-control form-control-sm"
            id="gameFanpage"
            name="gameFanpage"
            placeholder="Trang fanpage của mu (vd: https://www.facebook.com/mumoira.info)"
            alt="Trang fanpage của mu (vd: https://www.facebook.com/mumoira.info)"
            title="Trang fanpage game mu của bạn"
            autocomplete="off"
            maxlength="100"
        />
      </div>
    </div>
    <div class="form-group row" id="form_gameVer">
      <label for="SelectPhienBan" class="col-3 col-md-2 col-lg-2 col-form-label">Phiên Bản <span class="text-danger" style="font-style: italic; font-size: 13px;">(*)</span>:</label>
      <div class="col-9 col-md-8 col-lg-8">
        <select class="form-control form-control-sm" id="gameVer" name="gameVer">
          <option value="" selected="" disabled="" hidden="">Chọn phiên bản Mu Online</option>
          <option v-for="(item, index) in gameVer" :key="index" :value="item.value">
            {{ item.label }}
          </option>
        </select>
      </div>
    </div>
    <div class="form-group row" id="form_gameType">
      <label for="SelectMuType" class="col-3 col-md-2 col-lg-2 col-form-label">Loại Mu <span class="text-danger" style="font-style: italic; font-size: 13px;">(*)</span>:</label>
      <div class="col-9 col-md-8 col-lg-8">
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="muReset" name="gameType" value="reset" alt="Mu Reset" checked="" />
          <label class="custom-control-label" for="muReset">Reset</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="muNonReset" name="gameType" value="nonReset" alt="Mu Non Reset" />
          <label class="custom-control-label" for="muNonReset">Non Reset</label>
        </div>
      </div>
    </div>
    <div class="form-group row" id="form_gameServer">
      <label for="inputTenServer" class="col-3 col-md-2 col-lg-2 col-form-label">Tên Máy Chủ <span class="text-danger" style="font-style: italic; font-size: 13px;">(*)</span>:</label>
      <div class="col-9 col-md-8 col-lg-8">
        <input
            type="text"
            class="form-control form-control-sm"
            id="gameServer"
            name="gameServer"
            placeholder="Tên máy chủ Mu (Vd: máy chủ Lorencia)"
            alt="Tên máy chủ Mu (Vd: máy chủ Lorencia)"
            title="Tên máy chủ Mu (Vd: máy chủ Lorencia)"
            autocomplete="off"
        />
      </div>
    </div>
    <div class="form-group row" id="form_gameDescription">
      <label for="inputgameDescription" class="col-3 col-md-2 col-lg-2 col-form-label">Miêu Tả Mu <span class="text-danger" style="font-style: italic; font-size: 13px;">(*)</span>:</label>
      <div class="col-9 col-md-8 col-lg-8">
        <input
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
      </div>
    </div>
    <div class="form-group row" id="form_alphaTest">
      <label for="inputAlphaTest" class="col-3 col-md-2 col-lg-2 col-form-label">Alpha Test:</label>
      <div class="col-3 col-md-2 col-lg-2">
        <select class="form-control form-control-sm" id="alphaTestHour" name="alphaTestHour">
          <option value="" selected="" disabled="" hidden="">Giờ</option>
          <option v-for="(item, index) in testHour" :key="index" :value="item.value">
            {{ item.label }}
          </option>
        </select>
      </div>
      <div class="col-6 col-md-3 col-lg-3">
        <input class="form-control form-control-sm date-picker" size="16" type="text" id="alphaTest" name="alphaTest" data-date-format="dd/mm/yyyy" placeholder="ngày/tháng/năm" readonly="" />
      </div>
    </div>
    <div class="form-group row" id="form_openBeta">
      <label for="inputOpenBeta" class="col-3 col-md-2 col-lg-2 col-form-label">Open Beta <span class="text-danger" style="font-style: italic; font-size: 13px;">(*)</span>:</label>
      <div class="col-3 col-md-2 col-lg-2">
        <select class="form-control form-control-sm" id="openBetaHour" name="openBetaHour">
          <option value="" selected="" disabled="" hidden="">Giờ</option>
          <option v-for="(item, index) in betaHour" :key="index" :value="item.value">
            {{ item.label }}
          </option>
        </select>
      </div>
      <div class="col-6 col-md-3 col-lg-3">
        <input class="form-control form-control-sm date-picker" size="16" type="text" id="openBeta" name="openBeta" data-date-format="dd/mm/yyyy" placeholder="ngày/tháng/năm" readonly="" />
      </div>
    </div>
    <div class="form-group row" id="form_gameExp">
      <label for="inputExp" class="col-3 col-md-2 col-lg-2 col-form-label">Exp <span class="text-danger" style="font-style: italic; font-size: 13px;">(*)</span>:</label>
      <div class="col-3 col-md-3 col-lg-3">
        <input
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
    </div>
    <div class="form-group row" id="form_gameDrop">
      <label for="inputDrop" class="col-3 col-md-2 col-lg-2 col-form-label">Drop <span class="text-danger" style="font-style: italic; font-size: 13px;">(*)</span>:</label>
      <div class="col-3 col-md-3 col-lg-3">
        <input
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
    </div>
    <div class="form-group row" id="form_gameAntiHack">
      <label for="inputAntiHack" class="col-3 col-md-2 col-lg-2 col-form-label">Anti Hack:</label>
      <div class="col-9 col-md-8 col-lg-8">
        <input
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
      </div>
    </div>
    <div class="form-group row" id="form_gameDetail">
      <label for="inputEditor" class="col-12 col-md-12 col-lg-12 col-form-label">
        Miêu tả chi tiết game Mu Online của bạn <span class="text-danger" style="font-style: italic; font-size: 13px;">(*)</span>: bài viết càng chi tiết sẽ càng thu hút nhiều người xem
      </label>
    </div>
  </form>

</template>

<script>
import betaHour from '../../context/betaHour.json'
import gameVer from '../../context/gameVer.json'
import testHour from '../../context/testHour.json'
export default {
  name: "AdsForm",
  data() {
    return {
      betaHour,
      gameVer,
      testHour
    }
  },
}
</script>
