<div class="container">
<section>
<?php 

    $session = \Config\Services::session();
?>
<?php if(isset($session->success)): ?>
<div class="alert alert-success text-center  alert-dismissible fade show " role="0"> 
<p>Se agregó un nuevo post!</p>
<button type="button" class="close" data-dismiss="alert" aria-label="Close" >
    <span aria-hidden="true">&times;</span>
</button>
</div>
<?php endif;   ?>


    <div class="container">
    <div class="jumbotron " style="margin-top: 5vh">
    <h1 class="display-4">Un blog simple</h1>
    <p class="lead">Con Codeigniter framework!</p>
    <hr class="my-4">
    <p>Crea tu propio blog de notas</p>
    </div>
    </div>
</section>


<section class="blog-section">
   
    <?php if($news): ?>
       <?php foreach ($news as $item): ?>  
        <h3 class="text-center"><a href="/blog/<?= $item['slug'] ?>" >  <?= $item['title'] ?> </a> </h3>
       <?php endforeach; ?>
       <?php else: ?> 
       <p class="text-center">Sin post creados</p>
       <?php endif; ?>
       
 </section>


 </div>