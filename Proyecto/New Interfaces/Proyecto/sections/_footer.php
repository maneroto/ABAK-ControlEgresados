    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
           <a class="weatherwidget-io" href="https://forecast7.com/es/20d38n99d96/mexico/" data-label_1="SAN JUAN DEL RÍO" data-label_2="CLIMA" data-theme="dark" data-basecolor="rgba(0, 0, 0, 0.00)" >SAN JUAN DEL RÍO CLIMA</a>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Enlaces</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" 
                href="<?php echo $httpProtocol.$host.$url.'views/consultas.php'?>">Consultas</a>
              </li>
              <li><a class="grey-text text-lighten-3" 
                href="<?php echo $httpProtocol.$host.$url.'views/registros.php'?>">Registros</a>
              </li>
              <li><a class="grey-text text-lighten-3" 
               href="<?php echo $httpProtocol.$host.$url.'views/encuestas.php'?>">Encuestas</a>
              </li>
              <li><a class="grey-text text-lighten-3" 
                href="<?php echo $httpProtocol.$host.$url.'views/reportes.php'?>">Reportes</a>
              </li>
              <li><a class="grey-text text-lighten-3" 
                href="<?php echo $httpProtocol.$host.$url.'views/organizacion.php'?>">Organización</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2019 A'BAK TEAM - Powered by Tecnológico de Monterrey
        </div>
      </div>
    </footer>
    <?php echo $js;?>
    <script type="text/javascript" src="<?php echo $httpProtocol.$host.$url.'js/init.js'?>"></script>
  </body>
</html>