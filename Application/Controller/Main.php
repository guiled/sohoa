<?php

namespace Application\Controller {

    use Sohoa\Framework\Kit;

    class Main extends Kit {

        public function indexAction() {
			$this->xyl->render();
        }
    }
}
