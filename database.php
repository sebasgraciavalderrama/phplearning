<!--
***SQL CREATED IN PHPMYADMIN LOCALHOST XAMPP:***
CREATE TABLE posts (
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128) NOT NULL,
    content varchar(1000) NOT NULL,
    date datetime NOT NULL
);
INSERT INTO posts (subject, content, date)
VALUES ('This is the subject','Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Nam ac porttitor nulla, eget volutpat enim.
 Mauris ac lacus pretium, posuere orci id, sodales odio.
  Maecenas euismod pulvinar diam, varius viverra magna elementum vel.
  Donec sollicitudin eros iaculis ex euismod tempor.
  Vivamus cursus nibh at nunc tincidunt faucibus. Quisque posuere viverra viverra.
  Phasellus ultrices arcu quis mauris convallis ultrices. Nam porttitor malesuada ultricies.
  Phasellus ultricies placerat quam non gravida.', '2018-10-17 16:08:05');

  UPDATE POSTS SET subject='THIS IS A TEST',
   content='Nunc efficitur diam elit, nec hendrerit odio semper sed. Etiam at augue velit.
   Donec posuere quam sed lacus gravida, non pharetra nunc vestibulum.
   Aenean lobortis volutpat justo quis placerat. Nam tincidunt volutpat dolor at feugiat.
   Mauris in consectetur velit, eu pretium mi.
   Etiam ipsum urna, auctor et dui eu, porttitor luctus ante.
   Maecenas ac ultricies lorem, non efficitur elit.
   Praesent hendrerit risus vitae libero interdum dictum.
   Suspendisse vulputate rutrum libero in vestibulum.
   Donec porttitor, nulla vel lobortis varius, urna leo interdum ipsum, feugiat viverra mauris risus sed leo.
   Pellentesque ut purus quis enim porta hendrerit id et felis.
   Vestibulum ultrices metus ac tortor ornare malesuada.
   Sed lectus libero, bibendum id eleifend nec, mollis ut libero.
    In facilisis magna ante, ut fermentum turpis consectetur sit amet.'
   WHERE id='1'

   INSERT INTO posts (subject, content, date) VALUES ('Subject 2','Content 2','0000-00-00 00:00:00');
   SELECT * FROM POSTS ORDER BY ID ASC
-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php


     ?>
  </body>
</html>
