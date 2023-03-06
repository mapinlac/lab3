<header>
    <div class="px-3 py-2 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="../home" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <img src="https://cdn.7tv.app/emote/613937fcf7977b64f644c0d2/4x.png" width="350" height="50" role="img">
            <use xlink:href=""></use></svg>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="../home" class="nav-link text-white">
                <img src="https://venngage-wordpress.s3.amazonaws.com/uploads/2022/09/meme_sad_frog.png" width="24" height="24"><use xlink:href=""></use></svg>
                Home
              </a>
            </li>
            <li>
              <a href="../about" class="nav-link text-white">
              <img src="https://venngage-wordpress.s3.amazonaws.com/uploads/2022/09/meme_doge_dog.png" width="24" height="24"><use xlink:href=""></use></svg>
                About ME?
              </a>
            </li>
            <li>
              <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="nav-link text-white">
              <img src="https://venngage-wordpress.s3.amazonaws.com/uploads/2022/09/meme_this_is_fine_dog.png" width="24" height="24"><use xlink:href=""></use></svg>
                FREE BITCOIN!!!
              </a>
            </li>
            <li>
              <a href="../guest" class="nav-link text-white">
              <img src="https://media.wired.com/photos/5f87340d114b38fa1f8339f9/master/w_1600%2Cc_limit/Ideas_Surprised_Pikachu_HD.jpg" width="24" height="24"><use xlink:href=""></use></svg>
                GuestList
              </a>
            </li>
            <li>
              <a href="guest/create" class="nav-link text-secondary">
              <img src="https://www.esports.net/wp-content/uploads/2020/05/kekw-emote-2.jpg" width="24" height="24"><use xlink:href=""></use></svg>
                GuestForm
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
<h2 class="title"><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post">
    <?= csrf_field() ?>
    <center>
    <label for="name">Name</label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
    <br>

    <label for="email">Email</label>
    <input type="input" name="email" value="<?= set_value('email') ?>">
    <br>

    <label for="website">Website</label>
    <input type="input" name="website" value="<?= set_value('website') ?>">
    <br>

    <label for="comment">Comment</label>
    <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
    <br>

    <label for="gender">Gender</label>
    <input type="input" name="gender" value="<?= set_value('gender') ?>">
    <br>

    <input type="submit" name="submit" value="Create guest entry">

</form>

<section>
    <img src="https://cdn.betterttv.net/emote/5de88ccef6e95977b50e6eb1/3x.webp">
</section>
</center>