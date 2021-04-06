<div class="togarak-modal">
    <form action="#" class="togarak-modal-form">
        <div class="togarak-modal-form-control">
            <label for="name">@lang('messages.fullname')</label>
            <input type="text" id="name" class="togarak-modal-form-input name">
        </div>
        <div class="togarak-modal-form-group">
            <div class="togarak-modal-form-group-item-1">
                <label for="number">@lang('messages.phone')</label>
                <input type="text" class="togarak-modal-form-input phone" placeholder="+99 8XX XXX XX XX" >
            </div>
            <div class="togarak-modal-form-group-item-2">
                <label for="email">Email</label>
                <input type="text" class="togarak-modal-form-input email"  placeholder="forexample@gmail.com">
            </div>
        </div>
        <div class="togarak-modal-form-control textarea-control">
            <label for="text">@lang('messages.interes')  </label>
            <textarea name="" id="text"  placeholder="Qiziqishlaringizni qisqa matn ko’rinishida yuboring"
                class="togarak-modal-form-textarea body" ></textarea>
        </div>
       <input type="hidden" class="hidden_course">
        <button type="button" class="togarak-modal-btn">@lang('messages.send')</button>
    </form>
</div>
<div class="togarak-success">
    <div class="togarak-success-block">
        <!-- <div class="togarak-success-title">Ariza yuborildi!</div> -->
        <div class="togarak-success-img">
            <img src="/images/success.png" alt="">
        </div>
        <button type="button" class="togarak-success-btn">@lang('messages.close')</button>
    </div>
</div>