<?php echo $this->Form->create('User', array('url' => array('plugin' => 'users', 'controller' => 'users', 'action' => 'login')));?>
    <fieldset>
    <?php
        echo $this->Form->input('username',
            array('label' => __d('accelerator', 'Username'))
            );
        echo $this->Form->input('password',
            array('label' => __d('accelerator', 'Password'))
            );
    ?>
    </fieldset>
<?php echo $this->Form->end(__d('accelerator', 'Submit'));?>
<ul>
    <li>No account?
        <?php 
            echo $this->Html->link(__d('accelerator', 'Register here'), array('plugin' => 'accelerator', 'controller' => 'ideas', 'action' => 'add')); 
        ?>
    </li>
    <li>
        <?php
            echo $this->Html->link(__d('accelerator', 'Forgot your password?'), array('plugin' => 'users', 'controller' => 'users', 'action' => 'forgot')); 
        ?>
    </li>
</ul>