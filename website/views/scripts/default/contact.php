 <style type="text/css">
	body {
		background: url("/website/static/default/img/bghome.jpg")  repeat;
	}
	.wrappercontact{
		background: #00a2ff url("../img/bgheader.jpg") center top repeat-x;
		width:1349px;
		height : 558px;
	}
	#index .footer {
	margin-top: 30px;
	}
</style>

 <div class="row push-top2 rel-pos">
 	<div class="medium-6 column text-left bottom">
		<span class="titlepromobig font-PoetsenOne size-32 color-biru2">Silakan hubungi kami</span><br>
		<span class="titlepromobig font-myradpro size-16 color-biru2">Isi form pertanyaan dibawah dengan lengkap agar kami bisa menghubungi kamu</span>
	</div>
	<div class="medium-6 column text-left contactpic">
		<img src="/website/static/default/img/contacttop.png">		
	</div>
 </div>

<div class="wrappercontact" style="margin: 0 auto;" > 

<div class="row push-top2">
 	<div class="medium-6 column text-left  push-top2">
		<span class="titlecontact font-PoetsenOne size-32 color-biru2">Isi Form</span><br>
		<div class="amplop push-top">
			<?php if ($thanks != ''): ?>
			<div style="padding:10px;background:green;color:#fff;font-size:14px;"><?= $thanks; ?></div>
			<?php endif; ?>
			<form data-abide id="contactform" method="post" action="/contact/send/">
				<div class="row" style="min-width:200px !important;">
					<div class="large-6 column"><input name="name" type="text" placeholder="Nama lengkap" required></div>
					<div class="large-6 column"><input name="email" type="email" placeholder="Alamat email" required></div>
					<div class="large-6 column"><input name="phone" type="text" placeholder="Nomor telepon" required></div>
					<div class="large-6 column">
						<select class="selectcontact" name="category" required >
							<option value="">Kategori pertanyaan</option>
							<option value="General">Umum</option>
							<option value="Produk">Produk</option>
							<option value="Promosi">Promosi</option>
							<option value="Keluhan">Keluhan</option>
						</select>
					</div>
					<div class="large-12 column"><textarea name="question" placeholder="Pertanyaan kamu" required></textarea></div>
					<div class="large-12 column text-right"><button class="buttonkirim font-PoetsenOne size-20 color-kuning push-top">Kirim Sekarang</button></div>
				</div>
				</form>
			
		</div>
	</div>
	<div class="medium-6 column push-top2">
		<span class="titlecontact font-PoetsenOne size-32 color-biru2">Hubungi Kami</span><br>
		<div class="hubungikami push-top">
			
			<ul class="hubkami">
				<li class="emailicon-contact"> <a class="font-PoetsenOne size-20 color-putih" href="mailto:info@boneeto.co.id">info@boneeto.co.id</a></li><br>
				<li class="fbicon-contact"> <a class="font-PoetsenOne size-20 color-putih" href="https://www.facebook.com/BoneetoKidsClub" target="_blank">BoneetoKidsClub</a></li>
			</ul>
		</div>
	</div>
 </div>
 