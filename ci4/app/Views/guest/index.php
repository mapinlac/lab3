<header>
    <div class="px-3 py-2 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="http://localhost/lab3/ci4/public/home#" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <img src="https://cdn.7tv.app/emote/613937fcf7977b64f644c0d2/4x.png" width="350" height="50" role="img">
            <use xlink:href="http://localhost/lab3/ci4/public/home"></use></svg>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="home" class="nav-link text-white">
                <img src="https://venngage-wordpress.s3.amazonaws.com/uploads/2022/09/meme_sad_frog.png" width="24" height="24"><use xlink:href=""></use></svg>
                Home
              </a>
            </li>
            <li>
              <a href="about" class="nav-link text-white">
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
              <a href="guest" class="nav-link text-secondary">
              <img src="https://media.wired.com/photos/5f87340d114b38fa1f8339f9/master/w_1600%2Cc_limit/Ideas_Surprised_Pikachu_HD.jpg" width="24" height="24"><use xlink:href=""></use></svg>
                GuestList
              </a>
            </li>
            <li>
              <a href="guest/create" class="nav-link text-white">
              <img src="https://www.esports.net/wp-content/uploads/2020/05/kekw-emote-2.jpg" width="24" height="24"><use xlink:href=""></use></svg>
                GuestForm
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
<center>
<h2 class="title"><?= esc($title) ?></h2>
</center>
<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>
        <center>
        <div class="main">
            <h3><?= esc($guest_item['name']) ?></h3>
			<p><?= esc($guest_item['email']) ?></p>
			<p><?= esc($guest_item['comment']) ?></p>
        </div>
    </center>
    <?php endforeach ?>

<?php else: ?>
    <center>
    <h3>No guest/s</h3>
    <p>Unable to find any guests for you.</p>
    </center>
<?php endif ?>

<center>
<section>
    <img src="https://media.tenor.com/0UPw9RZF_cAAAAAC/pop-cat.gif">
</section>
</center>