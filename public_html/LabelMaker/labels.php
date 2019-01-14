<script type="text/javascript">
    window.onload = function() {
    document.getElementById('ifYes').style.display = 'none';
    document.getElementById('ifNo').style.display = 'none';
    }
function yesnoCheck() {
    if (document.getElementById('1check').checked) {
        document.getElementById('first').style.display = 'block';
        document.getElementById('second').style.display = 'none';
        document.getElementById('third').style.display = 'none';
        document.getElementById('submit').style.display = 'block';
        
    } else if(document.getElementById('2check').checked) {
        document.getElementById('first').style.display = 'block';
        document.getElementById('second').style.display = 'block';
        document.getElementById('third').style.display = 'none';
        document.getElementById('submit').style.display = 'block';

    } else if(document.getElementById('3check').checked) {
        document.getElementById('first').style.display = 'block';
        document.getElementById('second').style.display = 'block';
        document.getElementById('third').style.display = 'block';
        document.getElementById('submit').style.display = 'block';
   }
}
function yesnoCheck1() {
   if(document.getElementById('redhat').checked) {
       document.getElementById('redhat1').style.display = 'block';
       document.getElementById('aix1').style.display = 'none';
    }
   if(document.getElementById('aix').checked) {
       document.getElementById('aix1').style.display = 'block';
       document.getElementById('redhat1').style.display = 'none';
    }
}
</script>
<body>
  
    

<form class="form" action="LabelMaker/successpage.php" method="post">
    <div id="fixedWidth">
        <div class="sections differentiationSelector">
            <h1>Levels of differentiation<br></h1>
            <ul id='selector'>
                <li>1<input type="radio" onclick="javascript:yesnoCheck();" name="success" id="1check"/></li>
                <li>2<input type="radio" onclick="javascript:yesnoCheck();" name="success" id="2check"/></li>
                <li>3<input type="radio" onclick="javascript:yesnoCheck();" name="success" id="3check"/></li>
            </ul>        
            <br>
        </div>
        <div class="sections differentiationSelector" id="first" style="display:none">
            <h2>First Level of differentiation.</h2>
            <textarea cols="50" rows="5" class="input" maxlength="190" name="first1"></textarea>
        </div> 
        <div class="sections differentiationSelector" id="second" style="display:none">
                <h2>Second Level of differentiation.</h2>
            <textarea cols="50" rows="5" class="input" maxlength="190" name="second1"></textarea>
        </div>
        <div class="sections differentiationSelector" id="third" style="display:none">
                <h2>Third Level of differentiation.</h2>
                <textarea cols="50" rows="5" class="input" maxlength="190" name="third1"></textarea>
        </div>
        <div class="sections differentiationSelector" id="submit" style="display:none">
            <input class="button" type="submit" />
        </div> 
        
        
    </div>
</form>
