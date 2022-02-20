<script>
    document.addEventListener('DOMContentLoaded', () => {
        $('.open-popup').click(function(e) {
            e.preventDefault();
            $('.popup-bg').fadeIn(800);
            $('html').addClass('no-scroll');
            $('#buy_product_id').val(e.target.dataset.id);
        });

        $('#popup_close_btn').click(function() {
            $('.popup-bg').fadeOut(800);
            $('html').removeClass('no-scroll');
        });

        $('#buy_from_btn').click(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': {{ csrf_token() }}
                }
            });
            $.ajax({
                type: 'POST',
                data: $("#buy_form").serialize(),
                url: "{{ route('product.buy') }}",
            })
        });
    });
</script>

<div class="popup-bg">
    <div class="popup">
        <button id="popup_close_btn" style="float: right;">X</button>
        <h2>Форма покупки товара</h2>
        <form id="buy_form" action="#" method="post">
            Name:<br>
            @if (Auth::user())
                <input type="text" name="customer_name" value="{{ Auth::user()->name }}">
            @else
                <input type="text" name="customer_name">
            @endif
            <br>
            Email:<br>
            @if (Auth::user())
                <input type="text" name="email" value="{{ Auth::user()->email }}">
            @else
                <input type="text" name="email">
            @endif
            <input id="buy_product_id" name="product_id" type="hidden">
            {{ csrf_field() }}
            <br><br>
            <input id="buy_from_btn" type="submit" value="Submit">
        </form>
    </div>
</div>

<style>
    .popup-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.8);
        display: none;
    }

    .popup {
        position: absolute;
        background: #ffffff;
        width: 400px;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        padding: 30px;
        padding-top: 60px;
    }

    .popup form {
        display: flex;
        flex-direction: column;
    }

    .popup form input {
        margin-bottom: 30px;
        height: 50px;
        font-size: 20px;
        border: 2px solid #000000;
    }

    .popup form input[type="submit"] {
        background: #000000;
        color: #ffffff;
        font-size: 24px;
    }

    .close-popup {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    .no-scroll {
        overflow-y: hidden;
    }
</style>
