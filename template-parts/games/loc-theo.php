<div class="tool">
    <div class="row  align-items-center">
        <div class="col-12 col-sm-7 filter-wrap">
            <div class="d-flex justify-content-start align-items-center">
                <p class="filter-title filter-search">Lọc theo: </p>
                <div class="d-flex">
                    <a class="btn btn-sm btn-success me-2" href="/mu-alpha-test">
                        Alpha Test hôm nay
                    </a>
                    <a class="btn btn-sm btn-danger" href="/mu-open-beta">
                        Open beta hôm nay
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-5">
            <form class="input-group" method="get" action="/tim-kiem-mu">
                <input type="text" class="form-control txt_keyword" name="keyword" placeholder="Tìm kiếm MU mới ra ..."
                value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>"
                >
                <div class="input-group-append">
                    <button class="btn btn-search" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>