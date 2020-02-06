@extends('fruit.index')

@section('titlePage')
    Fruit/article
@endsection

{{--login info--}}
@section('wcFruitUser')
    @include('fruit.components.user')
@endsection

{{--search    --}}
@section('wcFruitSearch')
    @include('fruit.components.search')
@endsection

{{--menu--}}
@section('wcFruitMenu')
    @include('fruit.components.menu')
@endsection

@section('wcFruitMainContent')
    <div class="wc-margin-padding-none wc-bg-4">
        <div class="panel panel-default wc-margin-padding-none wc-border-none">
            <div class="panel-body text-center">
                <h3>Chào mừng bạn đến với WC0717.COM </h3>
                <a class="wc-link-red">Quyền lợi và trách nhiệm khi viết bài ?</a><br/>
                <a class="wc-link-red">Quy tắc viết bài ?</a>
            </div>
            <div class="panel-body ">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Lĩnh vực :</label>
                        <select class="form-control">
                            <option>Tổng hợp</option>
                            <option>Làm đẹp</option>
                            <option>Ẩm thực</option>
                            <option>Mẹo vặt</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tiêu đề :</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Mo ta ngam">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nội dung :</label>
                        <textarea class="form-control" name="txtPostContent"></textarea>
                        <script type="text/javascript">ckeditor("txtPostContent");</script>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh đại diện :</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Anh kem theo neu co</p>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Tôi đã đọc nội quy.
                        </label>
                    </div>
                    <button type="submit" class="btn btn-info wc-float-right">Đăng</button>
                </form>
            </div>
        </div>


    </div>
@endsection()
