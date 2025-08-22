<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>
       <?php
    $testing = 5;
    print gettype($testing); // integer
    print "<br>";
    $testing = "five";
    print gettype($testing); // string
    $undecided = 3.14;
    print gettype($undecided); // double
    print " -- $undecided<br>"; // 3.14
    settype($undecided, "string");
    print gettype($undecided); // string
    print " -- $undecided<br>"; // 3.14
    settype($undecided, "integer");
    print gettype($undecided); // integer
    print " -- $undecided<br>"; // 3
    settype($undecided, "double");
    print gettype($undecided); // double
    print " -- $undecided<br>"; // 3.0
    settype($undecided, "boolean");
    print gettype($undecided); // boolean
    print " -- $undecided<br>"; // 1

    $undecided = 3.14;
    $holder = (double) $undecided;
    print gettype( $holder ) ; // double
    print " -- $holder<br>"; // 3.14
    $holder = ( string ) $undecided;
    print gettype( $holder ); // string
    print " -- $holder<br>"; // 3.14

     $holder = ( integer ) $undecided;
    print gettype( $holder ); // integer
    print " -- $holder<br>";

     print gettype( $holder ); // double
    print " -- $holder<br>"; // 3.14
    $holder = ( boolean ) $undecided;
    print gettype( $holder ); // boolean
    print " -- $holder<br>"; // 1

     print "hello" . " " . "world";
    define("USER", "Mike");
    print "Welcome " . USER;

    $mood = "sad";
    if ($mood == "happy") {
      print "Hooray, I'm in a good mood";
    } else if ($mood == "sad") {
        print "Awww. Don't be down!";
    } else {
      print "Neither happy nor sad but $mood";
    }

    $mood = "sadder";
    switch ($mood) {
      case "happy":
        print "Hooray, I'm in a good mood";
        break;
      case "sad":
        print "Awww. Don't be down!";
        break;
      default:
        print "Neither happy nor sad but $mood";
    }

      $counter = 1;
    while ($counter <= 12) {
      print "$counter times 2 is " . ($counter * 2) . "<br>";
      $counter++;
    }
    ?>
    </h1>
  </body>
</html>
