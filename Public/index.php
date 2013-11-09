<?php

namespace {

	use Sohoa\Framework\Kit;
    use Sohoa\Framework\Framework;

    require_once __DIR__ . '/../vendor/autoload.php';

    $framework = new Framework();

	Kit::add('xyl', new Kit\Xyl());

	$xyl = new Hoa\Xyl(
		new Hoa\File\Read('hoa://Application/View/main.xyl'),
		new Hoa\Http\Response(),
		new Hoa\Xyl\Interpreter\Html()
	);
	$framework->view = $xyl;
    $framework->run();
}
