<ul>
    <li>$user- <?= var_dump($user); ?></li>
    <li>$title- <?= var_dump($title); ?></li>
    <li>$user'image'- <?= $user['image'] ?></li>
    <li>url$user.'image'- <?= base_url('assets/img/profile/') . $user['image']; ?></li>
</ul>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- content -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->