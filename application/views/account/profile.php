<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
    <p class="h5 my-0 me-md-auto fw-normal">Company name</p>
    <nav class="my-2 my-md-0 me-md-3">
        <a class="p-2 text-dark" href="/MVC_Example/news/show">News</a>
        <?php if(!empty($_SESSION['login'])):?>
        <a class="btn btn-outline-primary" href="MVC_Example/account/profile"><?= $_SESSION['login'];?></a>
        <?php endif;?>
    </nav>
    <form action="/MVC_Example/account/logout/" method="post">
    <button type="submit" class="btn btn-outline-danger">logout</button>
    </form>
</header>