 @extends('main')

@section('title','| contact Expert')

@section('content')
          
       

 <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

<div class = "form-class">
                    <h2 class="qtitle">Questions regarding Preschoolers</h2>
                    <form name="JungI" method="post" action="/hr/jtypesresult.aspx" role="form">
                         <input name="__RequestVerificationToken" value="58_zVj8T7LIhxI9MRD8Gwzo1LhpmxEutqoKK2vrtVz3wQ7ax0YVmiJiXRwADN--WYu5VbGV2dqJo2Q7zQngVIctL2_2XkI7SuhvBTpMublM1" type="hidden"><div class="qe"><span id="q0" class="qt7">1. Is there a history of dyslexia or reading problems in the family?
(Be sure to ask your parents & grandparents, you may be surprised)</span><div class="re7"><input name="r0" id="r0_1" class="qi7" value="1" aria-label="Strongly Agree" type="radio"><label class="ql7" for="r0_1" aria-label="Strongly Agree">YES</label><input name="r0" id="r0_2" class="qi7" value="2" aria-label="Agree" type="radio"><label class="ql7" for="r0_2" aria-label="Agree">no</label></div></div>
<div class="qe"><span id="q1" class="qt7">2. Is reading extremely difficult? (Below grade or age level)</span><div class="re7"><input name="r1" id="r1_1" class="qi7" value="1" aria-label="Strongly Agree" type="radio"><label class="ql7" for="r1_1" aria-label="Strongly Agree">YES</label><input name="r1" id="r1_2" class="qi7" value="2" aria-label="Agree" type="radio"><label class="ql7" for="r1_2" aria-label="Agree">no</label></div></div>
<div class="qe"><span id="q2" class="qt7">3. Are lists and sequences, such as the alphabet, difficult to memorize?</span><div class="re7"><input name="r2" id="r2_1" class="qi7" value="1" aria-label="Strongly Agree" type="radio"><label class="ql7" for="r2_1" aria-label="Strongly Agree">YES</label><input name="r2" id="r2_2" class="qi7" value="2" aria-label="Agree" type="radio"><label class="ql7" for="r2_2" aria-label="Agree">no</label></div></div>
<div class="qe"><span id="q3" class="qt7">4. Are multi-syllable words very difficult to pronounce? (spaghetti is passgetti)</span><div class="re7"><input name="r3" id="r3_1" class="qi7" value="1" aria-label="Strongly Agree" type="radio"><label class="ql7" for="r3_1" aria-label="Strongly Agree">YES</label><input name="r3" id="r3_2" class="qi7" value="2" aria-label="Agree" type="radio"><label class="ql7" for="r3_2" aria-label="Agree">no</div></div>
<div class="qe"><span id="q4" class="qt7">5. Is spelling ability poor? Letters missed, reversed etc.</span><div class="re7"><input name="r4" id="r4_1" class="qi7" value="1" aria-label="Strongly Agree" type="radio"><label class="ql7" for="r4_1" aria-label="Strongly Agree">YES</label><input name="r4" id="r4_2" class="qi7" value="2" aria-label="Agree" type="radio"><label class="ql7" for="r4_2" aria-label="Agree">no</label></div></div>
<div class="qe"><span id="q5" class="qt7">6. Was speech delayed? (most children begin speaking by age 2)
</span><div class="re7"><input name="r5" id="r5_1" class="qi7" value="1" aria-label="Strongly Agree" type="radio"><label class="ql7" for="r5_1" aria-label="Strongly Agree">YES</label><input name="r5" id="r5_2" class="qi7" value="2" aria-label="Agree" type="radio"><label class="ql7" for="r5_2" aria-label="Agree">no</div></div>
<div class="qe"><span id="q6" class="qt7">7. Is it difficult to rhyme words?(Not sure? Play a rhyming game with your child or student)</span><div class="re7"><input name="r6" id="r6_1" class="qi7" value="1" aria-label="Strongly Agree" type="radio"><label class="ql7" for="r6_1" aria-label="Strongly Agree">YES</label><input name="r6" id="r6_2" class="qi7" value="2" aria-label="Agree" type="radio"><label class="ql7" for="r6_2" aria-label="Agree">no</div></div>
<div class="qe"><span id="q7" class="qt7">8. Is there difficulty telling time on a clock with hands and/or tying shoes with laces? </span><div class="re7"><input name="r7" id="r7_1" class="qi7" value="1" aria-label="Strongly Agree" type="radio"><label class="ql7" for="r7_1" aria-label="Strongly Agree">YES</label><input name="r7" id="r7_2" class="qi7" value="2" aria-label="Agree" type="radio"><label class="ql7" for="r7_2" aria-label="Agree">no</div></div>
<div class="qe"><span id="q8" class="qt7">9. Are directions hard to follow? (Or any sequence of instructions)</span><div class="re7"><input name="r8" id="r8_1" class="qi7" value="1" aria-label="Strongly Agree" type="radio"><label class="ql7" for="r8_1" aria-label="Strongly Agree">YES</label><input name="r8" id="r8_2" class="qi7" value="2" aria-label="Agree" type="radio"><label class="ql7" for="r8_2" aria-label="Agree">no</div></div>
<div class="qe"><span id="q9" class="qt7">10. Is there difficulty finding the right words while speaking? Lots of ums, ahs, 'those things', and 'that stuff'.</span><div class="re7"><input name="r9" id="r9_1" class="qi7" value="1" aria-label="Strongly Agree" type="radio"><label class="ql7" for="r9_1" aria-label="Strongly Agree">YES</label><input name="r9" id="r9_2" class="qi7" value="2" aria-label="Agree" type="radio"><label class="ql7" for="r9_2" aria-label="Agree">no</label></div></div>
    
                        <div id="btsubg" class="form-group">
                        <input id="btsub" value="Score It!" class="btn btn-default btn-lg btn-success" style="font-weight: bold;" type="submit">
                        </div>
                    </form>
                </div>

@endsection
