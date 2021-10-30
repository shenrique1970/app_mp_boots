
<footer class="fixed-bottom">
    <div class="footer" style="background-color: #006151;">
        <div class="row">
            <div class="col-6"> 
                <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Desenvolvedores
                </button> 
            </div>
            <div class="col-6">   
                <h5>Links</h5>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="https://materializecss.com/"><img class="responsive-img logo-link" src="{{ asset('img/logomat.png') }}" style="width: 60px;" alt=""></a></li>
                    <li class="ms-3"><a class="link-dark" href="https://www.mysql.com/"><img class="responsive-img logo-link" src="{{ asset('img/logomysql.png') }}" style="width: 60px;" alt=""></a></li>
                    <li class="ms-3"><a class="link-dark" href="https://www.php.net/"><img class="responsive-img logo-link" src="{{ asset('img/logophp.png') }}" style="width: 60px;" alt=""></a></li>
                </ul>
            </div>
        </div>
    


        <div class="footer-copyright" style="background-color: #004d40;">
            <div class="container">
                © {{date('Y')}} Copyright - FAETEC - Amaury César Vieira / Volta Redonda - Todos os diteiros reservados
            </div>
        </div>
  
    </div>
</footer>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <br>IGOR NOVAES PEREIRA <br> NÁTALLY AYRA <br>  
            NATANI B. DE SOUSA FERREIRA <br> OTAVIO JOSE J. N. JUNIOR <br> 
            SÉRGIO HENRIQUE VIEIRA RIBEIRO <br> WADRIAN MARCULINO DIAS
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>