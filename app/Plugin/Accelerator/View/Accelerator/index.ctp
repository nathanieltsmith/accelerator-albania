<div class="slideshow">

    <ul class="slides">
        <li><?php echo $this->Html->image('homepage.jpg'); ?></li>
        <li><?php echo $this->Html->image('homepage2.jpg'); ?></li>
        <li><?php echo $this->Html->image('homepage3.jpg'); ?></li>
    </ul>

    <ul class="toggles">
        <li>Submit</li>
        <li>Engage</li>
        <li>Learn</li>
    </ul>

</div>


<h2><?php echo $title_for_layout; ?></h2>
<p><?php echo __($acceleratorVariable); ?></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi.</p>                

<!-- Column Section -->
<div class="columns-7-5">

    <!-- News Section -->
    <section class="news">
        <header>
            <p class="read-more">
                <a href="/blog">read more</a>
            </p>
            <h2><a href="/blog">News</a></h2>
        </header>

        <!-- Individual News Items -->
        <?php foreach ($nodes as $node): ?>

            <article>
                <div class="image">
                    <img src="" width="130" height="90" alt="">
                </div>
                <header>
                    <p>
                        <time pubdate="pubdate">
                            <?php echo $this->Time->format('d.m.Y', $node['Node']['created']); ?>
                        </time>
                    </p>
                    <h1>
                        <?php echo $this->Html->link($node['Node']['title'], $node['Node']['url']); ?>
                    </h1>
                </header>

                <div class="content">
                    <?php echo $this->Text->truncate($node['Node']['body'], 160,array(
                        'ending' => '...', 
                        'exact' => false,
                        'remove' => true
                    )) ?>
                    <?php echo $this->Html->link('Read more', $node['Node']['url']); ?>
                </div>
            </article>

        <?php endforeach; ?>
        <?php unset($nodes); ?>

    </section>

    <section class="submissions sidebar">
        <header>
            <p class="read-more">
            <?php 
                echo $this->Html->link(
                    'read more', 
                    array('plugin' => 'accelerator', 'controller' => 'ideas', 'action' => 'index')
                ); 
            ?>
            </p>
            <h2>
                <?php 
                echo $this->Html->link(
                    'Submissions', 
                    array('plugin' => 'accelerator', 'controller' => 'ideas', 'action' => 'index')
                ); 
            ?>
            </h2>
        </header>

        <!-- List of Submissions -->
        <?php
            echo $this->element('submissions');
        ?>

    </section>

</div>

<!-- Main Content Aside - Varies on Pages -->
<aside class="miscellaneous">
    <h3>Have a business idea of your own? <a href="">Click here!</a></h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</aside>

<?php
    $this->start('footer_bar');
        echo $this->element('mentors');
    $this->end();
?>