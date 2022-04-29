export default {
    ten_mu: {
        rules: 'required',
        messages: {
            required: 'Vui lòng điền thông tin tên game (vd: Mu FPT, Mu Quyền Năng...)'
        }
    },
    trang_chu: {
        rules: 'required',
        messages: {
            required: 'Vui lòng điền thông tin trang chủ game (vd: http://muwebzen.com)'
        }
    },
    phien_ban: {
        rules: 'required',
        messages: {
            required: 'Vui lòng điền thông tin phiên bản game (vd: Season 2, Season 6, Season 12...)'
        }
    },
    ten_may_chu: {
        rules: 'required',
        messages: {
            required: 'Vui lòng điền thông tin máy chủ game (vd: máy chủ Noria, máy chủ Quyền Năng...)'
        }
    },
    mieu_ta_mu: {
        rules: 'required',
        messages: {
            required: 'Vui lòng điền thông tin miêu tả đặc trưng của game (vd: full item trong shop game, miễn phí dạng vừa thôi...)'
        }
    },
    open_beta: {
        rules: 'required',
        messages: {
            required: 'Vui lòng điền thông tin ngày Open Beta của game'
        }
    },
    exp: {
        rules: 'required|min_value:1',
        messages: {
            required: 'Vui lòng điền thông tin điểm kinh nghiệm của server game (vd: 1x, 5x, 100x, 9999x)',
            min_value: 'Số kinh nghiệm phải lớn hơn không'
        }
    },
    drop: {
        rules: 'required|min_value:1',
        messages: {
            required: 'Vui lòng điền thông tin cấu hình drop rate của game (vd: 10%, 50%, 99%)',
            min_value: 'Drop rate phải lớn hơn không'
        }
    }
}
