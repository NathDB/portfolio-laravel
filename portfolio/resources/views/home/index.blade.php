@include('layouts.header')

<div class="pageContent shadow-lg p-4 bg-white rounded">
    <div class="d-flex flex-column">
      <section class="stage bd-highlight m-auto">
          <figure class="ball">
            <span class="shadow"></span>
            <span class="iris"></span>
          </figure>
      </section>
      <h1 class="nom p-2 pt-5 bd-highlight">A propos de moi</h1>
    </div>
    
    
    <div class="d-flex flex-row justify-content-center flex-wrap bd-highlight mb-3">
      <div class="p-2 bd-highlight"><img width="350" height="350" src="images/nathalieDB2.jpg"></div>
      <div class="p-2 bd-highlight">
      <ul class="list-group list-group-flush">
          <li class="list-group-item"><i class="large material-icons mr-3">account_circle</i>Nathalie DURASSIER-BONHEUR</li>
          <li class="list-group-item"><i class="large material-icons mr-3">cake</i>20 ans - Née le 03/04/2000</li>
          <li class="list-group-item"><i class="large material-icons mr-3">email</i>n.durassierbonheur@epsi.fr</li>
          <li class="list-group-item"><i class="large material-icons mr-3">lightbulb_outline</i>Dynamique, sociable et curieuse</li>
          <li class="list-group-item"><i class="large material-icons mr-3">place</i>Nantes</li>
          <li class="list-group-item"><i class="large material-icons mr-3">done</i><a class="btn-large waves-effect waves-blue white" href="/CVNathalieDB_2020.pdf" data-toggle="tooltip" data-placement="right" title="Téléchargez mon CV en PDF">Téléchargez-moi</li></a>
        </ul>
      </div>
    </div>
    <div class="card m-5 border-0">
      <div class="card-header border-bottom bg-transparent">
        Une vidéo vaut mieux que 1000 mots...
      </div>
      <div class="card-body">
        <div class="embed-responsive embed-responsive-16by9">
          <video class="embed-responsive-item" src="/images\videoPortfolio.mp4" allowfullscreen></video>
        </div>
      </div>
    </div>
</div>
@include('layouts.footer')
