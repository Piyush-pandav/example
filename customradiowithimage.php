<style>
.cc-selector_for_safety_step input{
    margin:0;padding:0;
    -webkit-appearance:none;
       -moz-appearance:none;
            appearance:none;
}
.visa_for_safety_step{background-image:url(http://mlsapis.info/Petronus/assets/ico/Asset%2065xxhdpi.png);}
.mastercard_for_Safety_step{background-image:url(http://mlsapis.info/Petronus/assets/ico/Asset%2066xxhdpi.png);}

.gh{background-image:url(http://mlsapis.info/Petronus/assets/ico/Asset%2067xxhdpi.png);}


.cc-selector_for_safety_step input:checked +.drinkcard-cc_for_safety.mastercard_for_Safety_step{
   background-image:url(http://mlsapis.info/Petronus/assets/ico/Asset%2069xxhdpi.png);
}

.cc-selector_for_safety_step input:checked +.drinkcard-cc_for_safety.visa_for_safety_step{
   background-image:url(http://mlsapis.info/Petronus/assets/ico/Asset%2068xxhdpi.png);
}

.cc-selector_for_safety_step input:checked +.drinkcard-cc_for_safety.gh{
   background-image:url(http://mlsapis.info/Petronus/assets/ico/Asset%2070xxhdpi.png);
}
.drinkcard-cc_for_safety{
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    width:100px;height:70px;
  
}

</style>
<form>
    <div class="cc-selector_for_safety_step">
        <input id="visa_for_safety_step" type="radio" name="credit-card" value="visa_for_safety_step" />
        <label class="drinkcard-cc_for_safety visa_for_safety_step" for="visa_for_safety_step"></label>
        <input id="mastercard_for_Safety_step" type="radio" name="credit-card" value="mastercard_for_Safety_step" />
        <label class="drinkcard-cc_for_safety mastercard_for_Safety_step"for="mastercard_for_Safety_step"></label>
          <input id="gh" type="radio" name="credit-card" value="gh" />
        <label class="drinkcard-cc_for_safety gh"for="gh"></label>
    </div>
     
</form>
