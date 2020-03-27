@include('layouts.header')

<div class="pageContent shadow-lg p-3 bg-white rounded">
    
    <div class="d-flex flex-columns">
      <section class="stage m-auto">
          <figure class="ball">
            <span class="shadow"></span>
            <span class="iris"></span>
          </figure>
      </section>
      <h1 class="nom">A propos de moi</h1>

    </div>
    
    <h1 class="nom">A propos de moi</h1>

    <div class="card bloc">
        <h3>Description</h3>
        <div class="card-body">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
        </div>
    </div>
</div>


<div class="m-auto">
    <div class="card">
    <section class="stage">
        <figure class="ball">
          <span class="shadow"></span>
          <span class="iris"></span>
        </figure>
    </section>
    <h1 class="text-center m-auto">A propos de moi</h1>
    <section class="stage">
        <figure class="ball">
          <span class="shadow"></span>
          <span class="iris"></span>
        </figure>
    </section>
  </div>
</div>
  

<div class="content">
  <div class="presentation">
    <div class="card m-auto" style="width: 18rem;">
      <img src="/images/colibri.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">A propos de moi !</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a class="btn-large waves-effect waves-blue white" href="/CVNathalieDB_2020.pdf"><span class="black-text"><i class="material-icons">file_download</i>&nbsp;Téléchargez moi !</span></a>
      </div>
    </div>
  

    <video controls autoplay loop width="650" class="ml-auto">
        <source src="/images\videoPortfolio.mp4" type="video/mp4">
        Sorry, your browser doesn't support embedded videos.
    </video>
    </div>

    <h3>Getting Started with Laravel 5.5</h3>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
</div>
@include('layouts.footer')
