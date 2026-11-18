```html
<!doctype html>
<html lang="es">
 <head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Registrar Viaje</title>
 </head>
 <body>

   <header>
     <nav>
       <div>
         <div>
           <img src="assets/puntero(1).png" alt="" />
           <a href="index.php">TravelControl</a>
         </div>
         <span>
           Coordinacion de viajes
         </span>
       </div>
     </nav>
   </header>

   <div>
     <div>

       <!--ASIDE-->
       <aside>
         <h6>MENU</h6>
         <a href="index.php">Inicio</a>
         <a href="viaje.php">Registrar viaje</a>
       </aside>

       <!--MAIN-->
       <main>
         <header>
           <h1>Registrar viaje</h1>
           <p>
             Formulario para registrar los datos de un nuevo viaje
           </p>
         </header>

         <!--SECTION 1-->
         <section>
           <h2>Datos del viaje</h2>

           <form action="" method="POST">

             <div>
               <label for="destino">Destino:</label>
               <input type="text" id="destino" name="destino" required />
             </div>

             <br>

             <div>
               <label for="fecha">Fecha del viaje:</label>
               <input type="date" id="fecha" name="fecha" required />
             </div>

             <br>

             <div>
               <label for="responsable">Responsable:</label>
               <input type="text" id="responsable" name="responsable" required />
             </div>

             <br>

             <div>
               <label for="personas">Numero de personas:</label>
               <input type="number" id="personas" name="personas" min="1" required />
             </div>

             <br>

             <div>
               <label for="transporte">Tipo de transporte:</label>
               <select id="transporte" name="transporte" required>
                 <option>Seleccionar</option>
                 <option>ATS</option>
                 <option>Combi</option>
                 <option>Avion</option>
                 <option>Tren maya</option>
               </select>
             </div>

             <br>

             <div>
               <label for="motivo">Motivo del viaje:</label>
               <textarea id="motivo" name="motivo" rows="4" required></textarea>
             </div>

             <br>

             <button type="submit">Guardar viaje</button>

           </form>
         </section>

       </main>
     </div>
   </div>

   <footer>
     Coordinación de Viajes | Sistema de Gestión
   </footer>

 </body>
</html>
```