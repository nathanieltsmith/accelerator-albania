<!-- Main Content / Customized from here -->
<section class="main homepage">
    <img width="940" height="175" src="">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi.</p>


    <!-- Column Section -->
    <div class="columns-7-5">

        <!-- Idea -->
        <section class="idea">
            <header>
                <div class="votes">
                    <a href="">8 Up</a>
                    <a href="">8 Down</a>
                </div>
                <h2>Edit My Idea</h2>
            </header>

            <?php
            $modelOpts = array('notforprofit'=>'Not For Profit',
                                        'nonprofit' =>'Nonprofit',
                                        'enterpriseb2b' => 'Enterprise/B2B',
                                        'b2c' => 'B2C',
                                        'subscription' => 'Subscription',
                                        'freemium' => 'Freemium',
                                        'retail' => 'Retail',
                                        'ecommerce' => 'ecommerce',
                                        'community' => 'Community',
                                        'advocacy' => 'Advocacy',
                                        'other' => 'Other'
                                        );
            $typeOpts =  array('social'=>'Social',
                                        'tech' =>'Tech',
                                        'scientific' => 'Scientfic',
                                        'other' => 'Other');

            echo $this->Form->create('Idea');
            echo $this->Form->input('title');
            echo $this->Form->input('description', array('rows' => '3'));
            echo $this->Form->input('type', array('options'=> $typeOpts));
            $user = AuthComponent::user();
            echo $this->Form->input('user_id', array('type' => 'hidden',
                                'value' => $user['id']));
            echo $this->Form->input('problem', array('rows' => '3',
                                ));
            echo $this->Form->input('solution', array('rows' => '3'));
            echo $this->Form->input('market', array('rows' => '3'));
            echo $this->Form->input('competition', array('rows' => '3'));
            echo $this->Form->input('model', array('options'=> $modelOpts));
            echo $this->Form->input('promise', array('rows' => '3'));

            echo $this->Form->end('Pitch');
            ?>

            <?php /* echo $this->Html->link('Cancel',
array('module' => 'accelerator', 'controller' => 'ideas', 'action' => 'view', $idea['Idea']['id']),array('class' => 'button')); */ ?>
            <a class="button" href="/accelerator/ideas">Cancel</a>
        </section>

        <!-- Submissions Sidebar (module) -->
        <section class="submissions sidebar">
            <header>
                <h2><a href="">Submissions</a></h2>
            </header>

            <!-- Submissions -->
            <?php
                echo $this->element('submissions');
            ?>

        </section>

    </div>

</section>

<?php
    echo $this->element('mentors');
?>