<div>
    <form action="" class="contact-form">
        <div class="contact-form-group">
            <label for="name">Ism Familiya</label>
            <input type="text" id="email" class="contact-form-input" placeholder="Jimmy Newtron" wire:model="name">
        </div>
        <div class="contact-form-group contact-email-mob">
            <label for="email">E-pochta</label>
            <input type="text" id="email" class="contact-form-input" wire:model="email" placeholder="jimmynewtron@mail.com">
        </div>
        <div class="contact-form-group form-num">
            <label for="phone">Telefon raqam</label>
            <input type="text" id="phone" class="contact-form-input" wire:model="phone" placeholder="+12 3456 789">
        </div>
        <div class="contact-form-textarea-wrap">
            <label for="text">Xabar matni</label>
            <textarea name="" id="text" class="contact-form-textarea"
                placeholder="Dear Sir/Madam" wire:model="body"></textarea>
        </div>
        <div class="contact-form-bottom">
            <div class="contact-form-checkbox">
                <input type="checkbox" id="lesson1"  wire:click="changeTerm"/>
                <label for="lesson1" class="contact-form-label">Accept terms & conditions</label>
            </div>
            <!-- <div> -->
            <button type="button" {{ !$terms ? 'disabled' : '' }}  wire:click.prevent="sendMessage"  class="  {{ !$terms ? 'btn_disabled' : '' }} contact-send-btn">Send</button>
            <!-- </div> -->
        </div>
    </form>
</div>
