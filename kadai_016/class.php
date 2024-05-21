<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <p>
      <?php
        class Food {
          private $name;
          private $price;
          public function name(string $name) {
            $this->name =$name;
          }
          public function show_price(string $price) {
            $this->price =$price;
          }
        }

        class Animal {
          private $name;
          private $height;
          private $weight;
          public function name(string $name) {
            $this->name =$name;
          }
          public function show_height(string $height) {
            $this->height =$height;
          }
          public function weight(string $weight) {
            $this->weight =$weight;
          }
        }

        $apple = new Food();
        $apple->name('りんご');
        $apple->show_price('170円');

        $dog = new Animal();
        $dog->name('ヨークシャテリア');
        $dog->show_height('30cm');
        $dog->weight('4.5kg');

        print_r($apple);
        echo '<br>';
        print_r($dog);

      
      ?>
    </p>
  </body>
</html>