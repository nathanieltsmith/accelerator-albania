<?php
	
	CroogoRouter::connect('/', array('plugin' => 'accelerator', 'controller' => 'accelerator', 'action' => 'index'));

	CroogoRouter::connect('/ideas', array('plugin' => 'accelerator', 'controller' => 'idea', 'action' => 'index'));

	CroogoRouter::connect('/accelerator', array('plugin' => 'accelerator', 'controller' => 'accelerator', 'action' => 'index'));
	CroogoRouter::connect('/accelerator', array('plugin' => 'accelerator', 'controller' => 'idea', 'action' => 'vote'));

