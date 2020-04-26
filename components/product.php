<div class="product">
    <? template('product/breadcrumbs') ?>
    <? template('product/card') ?>
    <div class="f-size background">
        <div class="flex content">
            <div class="left">
                <? template('product/priceRepair') ?>
                <? template('product/priceKit') ?>
            </div>
            <div class="right">
                <? template('main/garant') ?>
            </div>
        </div>
    </div>
    <? template('catalog/howToWork') ?>
</div>