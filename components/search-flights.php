<div data-component="search-flights">
    <form id="search-form">
        <div id="form-inputs-wrapper">
            <div id="from-to-wrapper">
                <div class="search-input-wrapper icon plane">
                    <input id="input-from" class="search-input location-input capitalize" type="text" placeholder="<?= $dictionary["{$language}_from"] ?>?">
                    <div class="suggestions-wrapper">



                    </div>
                </div>
                <button aria-label="Swap departure and destination locations" type="button" id="swap-from-to-btn"></button>
                <div class="search-input-wrapper icon plane">
                    <input id="input-to" class="search-input location-input capitalize" type="text" placeholder="<?= $dictionary["{$language}_to"] ?>?">
                    <div class="suggestions-wrapper">



                    </div>
                </div>
            </div>
        </div>
        <button class="search-btn gradient-btn"><?= $dictionary["{$language}_search"] ?></button>
    </form>

</div>