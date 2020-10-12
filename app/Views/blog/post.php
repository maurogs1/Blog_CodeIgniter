


<section>
    <article class="blog-post">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-center"><?= $post['title']  ?></h3>
            <p class="card-text"> <strong>Fecha del  Post: <?= date('M d Y', strtotime($post['created_at'])) ?></strong> </p>
            <hr>
            <p class="card-text"><?= $post['body']  ?></p>
        </div>
    </div>
        
         
    </article>
</section>

