<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/style.css">
 <title>Formulaire d'inscription</title>
</head>
<body>



<div class="bloc">
<form action="./action.php" method="post">

 <label for="pet-select">Choose a pet:</label>

<select name="pets" id="pet-select">
  <option value="">--Please choose an option--</option>
  <option value="dog">Dog</option>
  <option value="cat">Cat</option>
  <option value="hamster">Hamster</option>
  <option value="parrot">Parrot</option>
  <option value="spider">Spider</option>
  <option value="goldfish">Goldfish</option>
</select> <br> <br> <br>


 
        <label for="first_name">Prénom :</label>
        <input type="text" id="first_name" name="first_name" required><br>

        <label for="last_name">Nom :</label>
        <input type="text" id="last_name" name="last_name" required><br>

        <label for="email">E-mail :</label>
        <input type="email" id="email" name="email" required><br>

  

<div  > <br><br>
     <label  for="q1">conditions d'utilisateur</label>
        <p class="question1">
          <input type="checkbox" id="q1" name="reponse02" />j'accepte 

     
        </p> <br><br>
        
     











<div class="bloc1">
  <h3>pays</h3>
  <div>
    <input type="radio" id="cote d'ivoire" name="drone" value="cote d'ivoire" checked />
    <label for="cote d'ivoire">cote d'ivoire</label>
  </div>

  <div class="cote">
    <input type="radio" id="cote d'ivoire" name="drone" value="cote d'ivoire" />
    <label for="cote d'ivoire">cote d'ivoire</label>
  </div>

  <div>
    <input type="radio" id="cote d'ivoire" name="drone" value="cote d'ivoire" />
    <label for="cote d'ivoire">cote d'ivoire</label>
  </div>

</div>



 <div class="date">
                   
  <label for="start">Start date:</label>

<input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31" />

                  
  </div>

<div class="message">
  
  <label for="story">message</label>

<textarea id="story" name="story" rows="5" cols="33">
It was a dark and stormy night...
</textarea>
</div>
<!-- <div >


  <label for="first_name">cote d'ivoire</label>
        <input type="radio" id="q1" name="reponse11"><br>


 <label for="first_name">france</label>
        <input type="radio" id="q1" name="reponse12"><br>


 <label for="first_name">ghyjyjj</label>
        <input type="radio" id="q1" name="reponse13"><br>
</div> -->





               <!-- <label  for="q2">Pays
        <p >
          <input type="radio" id="q2" name="reponse11" />Cote d'ivoire
          <input type="radio" id="q2" name="reponse12" checked />russie
          <input type="radio" id="q2" name="reponse13" />france
        </p>
      </label>
       -->


<div class="envoi">
        <input  type="submit" value="Envoyer">
    </div>





  </form>














</body>
</html>
