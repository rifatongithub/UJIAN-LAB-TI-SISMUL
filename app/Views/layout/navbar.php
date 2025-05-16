    <link rel="stylesheet" href="/css/styleNavbar.css">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">LABTI SISMUL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="<?= base_url('/'); ?>">Home</a>
                    <a class="nav-link" href="<?= base_url('/mahasiswa'); ?>">Mahasiswa</a>
                </div>
                <?php if (session()->get('member_id')) : ?>
                    <a class="nav-item nav-link" href="pages/logout">Logout</a>
                <?php else : ?>
                    <a class="nav-item nav-link" href="/login">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>