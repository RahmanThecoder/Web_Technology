<?php
//subject list

class checkboxlist{
	public function sublist()
	{
		echo'
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="BANGLA"><span>BANGLA</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="ENGLISH"><span>ENGLISH</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="MATH"><span>MATH</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="SOCIAL SCIENCE"><span>SOCIAL SCIENCE</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="GENERAL SCIENCE"><span>GENERAL SCIENCE</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="RELIGION"><span>RELIGION</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="ICT"><span>ICT</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="PHYSICS"><span>PHYSICS</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="CHEMISTRY"><span>CHEMISTRY</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Higher Math"><span>HIGHER MATH</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="BIOLOGY"><span>BIOLOGY</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="SOCIOLOGY"><span>SOCIOLOGY</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="ECONOMICS"><span>ECONOMICS</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="ACCOUNTING"><span>ACCOUNTING</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="HISTORY"><span>HISTORY</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="FINANCE"><span>FINANCE</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="STATISTICS"><span>STATISTICS</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="COMPUTER SCIENCE"><span>COMPUTER SCIENCE</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="ART"><span>ART</span></div>


		';
	}
	//sub list unchecked box
	public function sublistcombo()
	{
		echo'
			<select name="sublistcombo" style="width: 180px;">
					
			  <option value="None">None</option>
			  <option value="BANGLA">Bangla</option>
			  <option value="ENGLISH">English</option>
			  <option value="MATH">MATH</option>
			  <option value="SOCIAL SCIENCE">SOCIAL SCIENCE</option>
			  <option value="GENERAL SCIENCE">GENERAL SCIENCE</option>
			  <option value="RELIGION">RELIGION</option>
			  <option value="ICT">ICT</option>
			  <option value="PHYSICS">PHYSICS</option>
			  <option value="CHEMISTRY">CHEMISTRY</option>
			  <option value="HIGHER MATH">HIGHER MATH</option>
			  <option value="BIOLOGY">BIOLOGY</option>
			  <option value="SOCIOLOGY">SOCIOLOGY</option>
			  <option value="ECONOMICS">ECONOMICS</option>
			  <option value="ACCOUNTING">ACCOUNTING</option>
			  <option value="HISTORY">HISTORY</option>
			  <option value="Finance">FINANCE</option>
			  <option value="STATISTICS">STATISTICS</option>
			  <option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
			</select>


		';
	}

	public function classlist()
	{
		echo '
			<div class="divp35"><input type="checkbox" name="class_list[]" value="Play-Two"><span>One-Three</span></div>
			<div class="divp35"><input type="checkbox" name="class_list[]" value="Three-Six"><span>Four-Five</span></div>
			<div class="divp35"><input type="checkbox" name="class_list[]" value="Seven"><span>Six-Seven</span></div>
			<div class="divp35"><input type="checkbox" name="class_list[]" value="Eight"><span>Eight</span></div>
			<div class="divp35"><input type="checkbox" name="class_list[]" value="Nine-Ten"><span>Nine-Ten</span></div>
			<div class="divp35"><input type="checkbox" name="class_list[]" value="Eleven-Twelve"><span>Eleven-Twelve</span></div>
			<div class="divp35"><input type="checkbox" name="class_list[]" value="College/University"><span>College/University</span></div>
		';
	}

	public function classlistcombo()
	{
		echo '
			<select style="width: 180px;" name="classlistcombo">
					
			  <option value="None">None</option>
			  <option value="Play-Two">One-Three</option>
			  <option value="Three-Six">Four-Five</option>
			  <option value="Seven">Six-Seven</option>
			  <option value="Eight">Eight</option>
			  <option value="Nine-Ten">Nine-Ten</option>
			  <option value="Eleven-Twelve">Eleven-Twelve</option>
			  <option value="College/University">College/University</option>
			</select>
		';
	}

	public function mediumlist()
	{
		echo '
			<div class="divp35"><input type="checkbox" name="medium_list[]" value="Bangla"><span>Bangla</span></div>
			<div class="divp35"><input type="checkbox" name="medium_list[]" value="English"><span>English</span></div>
			<div class="divp35"><input type="checkbox" name="medium_list[]" value="Any"><span>Any</span></div>
		';
	}

	public function mediumlistcombo()
	{
		echo '
			<select name="mediumlistcombo" style="width: 180px;">
					
			  <option value="None">None</option>
			  <option value="BANGLA">Bangla</option>
			  <option value="ENGLISH">English</option>
			  <option value="Any">Any</option>
			</select>
		';
	}
}

?>