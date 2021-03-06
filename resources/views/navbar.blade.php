{{-- resouces/views/navbar.blade.php --}}



<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">ブランド</a>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="Navber">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/">ホーム <span class="sr-only">(現位置)</span></a>
        </li>

        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Masters
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/makers">Makers</a>
                <a class="dropdown-item" href="/micategories">Micategory</a>
                <a class="dropdown-item" href="/micategorydtls">MicategoryDTL</a>
                <a class="dropdown-item" href="/icategories">icategory</a>
                <a class="dropdown-item" href="/mifunctiondtls">MiFunctiondtl</a>
                <a class="dropdown-item" href="/ifunctions/">ifunctions</a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">その他</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Relation
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/micrelmicdtl">M_iTEMS</a>
                <a class="dropdown-item" href="/icrelmic">iTEMS</a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">その他</a>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="/makers">Makers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/micategories">Micategory</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/micategorydtls">MicategoryDTL</a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ドロップダウン
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">メニュー1</a>
                <a class="dropdown-item" href="#">メニュー2</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">その他</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">無効</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <input type="search" class="form-control mr-sm-2" placeholder="検索..." aria-label="検索...">
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">検索</button>
    </form>
</div><!-- /.navbar-collapse -->
</nav>

{{--<script>--}}
    {{--import Navbar from "bootstrap-vue/es/components/navbar/navbar";--}}
    {{--export default {--}}
        {{--components: {Navbar}--}}
    {{--}--}}
{{--</script>--}}