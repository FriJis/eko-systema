<div class="form__page" id="form">
	<div class="callback__form" :class="{active: active}">
		<form class="block" @submit.prevent="send()">
			<div class="header">
				<div class="exit"><i class="far fa-window-close" @click="switchForm"></i></div>
				<div class="callbac-ico"><i class="fas fa-phone-alt"></i></div>
			</div>
			<div v-if="!done" class="inputs">
				<div class="input flex">
					<div class="ico">
						<i class="fas fa-user"></i>
					</div>
					<input type="text" required placeholder="Ваше имя" v-model="fields.uname">
				</div>
				<div class="input flex">
					<div class="ico">
						<i class="fas fa-phone-alt"></i>
					</div>
					<input type="text" required placeholder="Ваш номер телефона" v-model="fields.uphone">
				</div>
				<div class="input flex">
					<textarea name="" placeholder="Комментарий" v-model="fields.utext"></textarea>
				</div>
				<div class="privacy">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности</div>
				<div class="input">
					<input type="submit" value="Отправить" >
				</div>
			</div>
			<div v-else class="h3 t-a-center">Ваша заявка отправлена</div>
		</form>
	</div>
</div>