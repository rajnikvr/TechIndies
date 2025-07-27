@extends('layouts.master')
@section('title')
Home
@endsection
@section('content')
<div data-animation="default" class="navbar w-nav" data-easing2="ease" data-easing="ease" data-collapse="medium" data-w-id="5e31057a-541e-ead9-75ae-97c28eec02bb" role="banner" data-duration="400" id="Top">
   <a href="/" aria-current="page" class="logo-link w-nav-brand w--current"><img width="70" loading="lazy" alt="" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef4d_logo.avif" class="main-logo"/></a>
   <div class="last-item">
      <nav role="navigation" class="nav-menu w-nav-menu">
         <a href="/" aria-current="page" class="navigation-link w-inline-block w--current">
            <div class="button-text-wrapper">
               <div class="button-text">Home</div>
               <div class="button-text">Home</div>
            </div>
            <div class="line-below"></div>
         </a>
         <div class="button-text coma">,</div>
         <a href="/about" class="navigation-link w-inline-block">
            <div class="button-text-wrapper">
               <div class="button-text">About</div>
               <div class="button-text">About</div>
            </div>
            <div class="line-below"></div>
         </a>
         <div class="button-text coma">,</div>
         <a href="/work" class="navigation-link w-inline-block">
            <div class="button-text-wrapper">
               <div class="button-text">Works</div>
               <div class="button-text">Works</div>
            </div>
            <div class="line-below"></div>
         </a>
         <div class="button-text coma">,</div>
         <a href="/contact" class="navigation-link w-inline-block">
            <div class="button-text-wrapper">
               <div class="button-text">Contact</div>
               <div class="button-text">Contact</div>
            </div>
            <div class="line-below"></div>
         </a>
         <div class="button-text coma">,</div>
      </nav>
      <div data-open-product="" data-wf-cart-type="modal" data-wf-cart-query="query Dynamo3 {
         database {
         id
         commerceOrder {
         comment
         extraItems {
         name
         pluginId
         pluginName
         price {
         decimalValue
         string
         unit
         value
         }
         }
         id
         startedOn
         statusFlags {
         hasDownloads
         hasSubscription
         isFreeOrder
         requiresShipping
         }
         subtotal {
         decimalValue
         string
         unit
         value
         }
         total {
         decimalValue
         string
         unit
         value
         }
         updatedOn
         userItems {
         count
         id
         price {
         value
         unit
         decimalValue
         string
         }
         product {
         id
         cmsLocaleId
         draft
         archived
         f_name_: name
         f_sku_properties_3dr: skuProperties {
         id
         name
         enum {
         id
         name
         slug
         }
         }
         }
         rowTotal {
         decimalValue
         string
         unit
         value
         }
         sku {
         cmsLocaleId
         draft
         archived
         f_main_image_4dr: mainImage {
         url
         file {
         size
         origFileName
         createdOn
         updatedOn
         mimeType
         width
         height
         variants {
         origFileName
         quality
         height
         width
         s3Url
         error
         size
         }
         }
         alt
         }
         f_sku_values_3dr: skuValues {
         property {
         id
         }
         value {
         id
         }
         }
         id
         }
         subscriptionFrequency
         subscriptionInterval
         subscriptionTrial
         }
         userItemsCount
         }
         }
         site {
         commerce {
         id
         businessAddress {
         country
         }
         defaultCountry
         defaultCurrency
         quickCheckoutEnabled
         }
         }
         }" data-wf-page-link-href-prefix="" class="w-commerce-commercecartwrapper" data-node-type="commerce-cart-wrapper">
         <a class="w-commerce-commercecartopenlink nav-link w-inline-block" role="button" aria-haspopup="dialog" aria-label="Open cart" data-node-type="commerce-cart-open-link" href="#">
            <div class="w-inline-block">Cart</div>
            <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItemsCount%22%7D%7D%5D" class="w-commerce-commercecartopenlinkcount cart-quantity">0</div>
         </a>
         <div style="display:none" class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-modal cart-wrapper" data-node-type="commerce-cart-container-wrapper">
            <div data-node-type="commerce-cart-container" role="dialog" class="w-commerce-commercecartcontainer cart-container">
               <div class="w-commerce-commercecartheader cart-header">
                  <h4 class="w-commerce-commercecartheading">Your Cart</h4>
                  <a class="w-commerce-commercecartcloselink close-button w-inline-block" role="button" aria-label="Close cart" data-node-type="commerce-cart-close-link">
                     <svg class="icon" width="16px" height="16px" viewBox="0 0 16 16">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                           <g fill-rule="nonzero" fill="#333333">
                              <polygon points="6.23223305 8 0.616116524 13.6161165 2.38388348 15.3838835 8 9.76776695 13.6161165 15.3838835 15.3838835 13.6161165 9.76776695 8 15.3838835 2.38388348 13.6161165 0.616116524 8 6.23223305 2.38388348 0.616116524 0.616116524 2.38388348 6.23223305 8"></polygon>
                           </g>
                        </g>
                     </svg>
                  </a>
               </div>
               <div class="w-commerce-commercecartformwrapper">
                  <form style="display:none" class="w-commerce-commercecartform" data-node-type="commerce-cart-form">
                     <script type="text/x-wf-template" id="wf-template-5e31057a-541e-ead9-75ae-97c28eec02f2">%3Cdiv%20class%3D%22w-commerce-commercecartitem%22%3E%3Cimg%20src%3D%22https%3A%2F%2Fcdn.prod.website-files.com%2Fplugins%2FBasic%2Fassets%2Fplaceholder.60f9b1840c.svg%22%20data-wf-bindings%3D%22%255B%257B%2522src%2522%253A%257B%2522type%2522%253A%2522ImageRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_main_image_4dr%2522%257D%257D%255D%22%20alt%3D%22%22%20class%3D%22w-commerce-commercecartitemimage%20w-dyn-bind-empty%22%2F%3E%3Cdiv%20class%3D%22w-commerce-commercecartiteminfo%22%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_name_%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartproductname%20pricing-text%20with-px%20w-dyn-bind-empty%22%3E%3C%2Fdiv%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePrice%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522price%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.price%2522%257D%257D%255D%22%20class%3D%22pricing-text%22%3E%24%C2%A00.00%C2%A0USD%3C%2Fdiv%3E%3Cscript%20type%3D%22text%2Fx-wf-template%22%20id%3D%22wf-template-5e31057a-541e-ead9-75ae-97c28eec02f9%22%3E%253Cli%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522PlainText%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D.name%252522%25257D%25257D%25255D%2522%253E%253C%252Fspan%253E%253Cspan%253E%253A%2520%253C%252Fspan%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522CommercePropValues%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D%252522%25257D%25257D%25255D%2522%253E%253C%252Fspan%253E%253C%252Fli%253E%3C%2Fscript%3E%3Cul%20data-wf-bindings%3D%22%255B%257B%2522optionSets%2522%253A%257B%2522type%2522%253A%2522CommercePropTable%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%5B%5D%2522%257D%257D%252C%257B%2522optionValues%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_sku_values_3dr%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartoptionlist%22%20data-wf-collection%3D%22database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%22%20data-wf-template-id%3D%22wf-template-5e31057a-541e-ead9-75ae-97c28eec02f9%22%3E%3Cli%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3C%2Fli%3E%3C%2Ful%3E%3Ca%20href%3D%22%23%22%20role%3D%22button%22%20data-wf-bindings%3D%22%255B%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22remove-button%20w-inline-block%22%20data-wf-cart-action%3D%22remove-item%22%20data-commerce-sku-id%3D%22%22%20aria-label%3D%22Remove%20item%20from%20cart%22%3E%3Cdiv%3ERemove%3C%2Fdiv%3E%3C%2Fa%3E%3C%2Fdiv%3E%3Cinput%20aria-label%3D%22Update%20quantity%22%20data-wf-bindings%3D%22%255B%257B%2522value%2522%253A%257B%2522type%2522%253A%2522Number%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522numberPrecision%2522%252C%2522params%2522%253A%255B%25220%2522%252C%2522numberPrecision%2522%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.count%2522%257D%257D%252C%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartquantity%20cart-quantity-2%22%20required%3D%22%22%20pattern%3D%22%5E%5B0-9%5D%2B%24%22%20inputMode%3D%22numeric%22%20type%3D%22number%22%20name%3D%22quantity%22%20autoComplete%3D%22off%22%20data-wf-cart-action%3D%22update-item-quantity%22%20data-commerce-sku-id%3D%22%22%20value%3D%221%22%2F%3E%3C%2Fdiv%3E</script>
                     <div class="w-commerce-commercecartlist" data-wf-collection="database.commerceOrder.userItems" data-wf-template-id="wf-template-5e31057a-541e-ead9-75ae-97c28eec02f2">
                        <div class="w-commerce-commercecartitem">
                           <img src="https://cdn.prod.website-files.com/plugins/Basic/assets/placeholder.60f9b1840c.svg" data-wf-bindings="%5B%7B%22src%22%3A%7B%22type%22%3A%22ImageRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_main_image_4dr%22%7D%7D%5D" alt="" class="w-commerce-commercecartitemimage w-dyn-bind-empty"/>
                           <div class="w-commerce-commercecartiteminfo">
                              <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_name_%22%7D%7D%5D" class="w-commerce-commercecartproductname pricing-text with-px w-dyn-bind-empty"></div>
                              <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.price%22%7D%7D%5D" class="pricing-text">$ 0.00 USD</div>
                              <script type="text/x-wf-template" id="wf-template-5e31057a-541e-ead9-75ae-97c28eec02f9">%3Cli%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3C%2Fli%3E</script>
                              <ul data-wf-bindings="%5B%7B%22optionSets%22%3A%7B%22type%22%3A%22CommercePropTable%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr[]%22%7D%7D%2C%7B%22optionValues%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_sku_values_3dr%22%7D%7D%5D" class="w-commerce-commercecartoptionlist" data-wf-collection="database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr" data-wf-template-id="wf-template-5e31057a-541e-ead9-75ae-97c28eec02f9">
                                 <li><span data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D.name%22%7D%7D%5D"></span><span>: </span><span data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D%22%7D%7D%5D"></span></li>
                              </ul>
                              <a href="#" role="button" data-wf-bindings="%5B%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D" class="remove-button w-inline-block" data-wf-cart-action="remove-item" data-commerce-sku-id="" aria-label="Remove item from cart">
                                 <div>Remove</div>
                              </a>
                           </div>
                           <input aria-label="Update quantity" data-wf-bindings="%5B%7B%22value%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.count%22%7D%7D%2C%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D" class="w-commerce-commercecartquantity cart-quantity-2" required="" pattern="^[0-9]+$" inputMode="numeric" type="number" name="quantity" autoComplete="off" data-wf-cart-action="update-item-quantity" data-commerce-sku-id="" value="1"/>
                        </div>
                     </div>
                     <div class="w-commerce-commercecartfooter cart-footer">
                        <div aria-live="polite" aria-atomic="true" class="w-commerce-commercecartlineitem">
                           <div class="subtotal">Subtotal</div>
                           <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.subtotal%22%7D%7D%5D" class="w-commerce-commercecartordervalue pricing-text"></div>
                        </div>
                        <div>
                           <div data-node-type="commerce-cart-quick-checkout-actions" style="display:none">
                              <a role="button" aria-haspopup="dialog" aria-label="Apple Pay" data-node-type="commerce-cart-apple-pay-button" style="background-image:-webkit-named-image(apple-pay-logo-white);background-size:100% 50%;background-position:50% 50%;background-repeat:no-repeat" class="w-commerce-commercecartapplepaybutton" tabindex="0">
                                 <div></div>
                              </a>
                              <a role="button" tabindex="0" aria-haspopup="dialog" data-node-type="commerce-cart-quick-checkout-button" style="display:none" class="w-commerce-commercecartquickcheckoutbutton">
                                 <svg class="w-commerce-commercequickcheckoutgoogleicon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                                    <defs>
                                       <polygon id="google-mark-a" points="0 .329 3.494 .329 3.494 7.649 0 7.649"></polygon>
                                       <polygon id="google-mark-c" points=".894 0 13.169 0 13.169 6.443 .894 6.443"></polygon>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                       <path fill="#4285F4" d="M10.5967,12.0469 L10.5967,14.0649 L13.1167,14.0649 C14.6047,12.6759 15.4577,10.6209 15.4577,8.1779 C15.4577,7.6339 15.4137,7.0889 15.3257,6.5559 L7.8887,6.5559 L7.8887,9.6329 L12.1507,9.6329 C11.9767,10.6119 11.4147,11.4899 10.5967,12.0469"></path>
                                       <path fill="#34A853" d="M7.8887,16 C10.0137,16 11.8107,15.289 13.1147,14.067 C13.1147,14.066 13.1157,14.065 13.1167,14.064 L10.5967,12.047 C10.5877,12.053 10.5807,12.061 10.5727,12.067 C9.8607,12.556 8.9507,12.833 7.8887,12.833 C5.8577,12.833 4.1387,11.457 3.4937,9.605 L0.8747,9.605 L0.8747,11.648 C2.2197,14.319 4.9287,16 7.8887,16"></path>
                                       <g transform="translate(0 4)">
                                          <mask id="google-mark-b" fill="#fff">
                                             <use xlink:href="#google-mark-a"></use>
                                          </mask>
                                          <path fill="#FBBC04" d="M3.4639,5.5337 C3.1369,4.5477 3.1359,3.4727 3.4609,2.4757 L3.4639,2.4777 C3.4679,2.4657 3.4749,2.4547 3.4789,2.4427 L3.4939,0.3287 L0.8939,0.3287 C0.8799,0.3577 0.8599,0.3827 0.8459,0.4117 C-0.2821,2.6667 -0.2821,5.3337 0.8459,7.5887 L0.8459,7.5997 C0.8549,7.6167 0.8659,7.6317 0.8749,7.6487 L3.4939,5.6057 C3.4849,5.5807 3.4729,5.5587 3.4639,5.5337" mask="url(#google-mark-b)"></path>
                                       </g>
                                       <mask id="google-mark-d" fill="#fff">
                                          <use xlink:href="#google-mark-c"></use>
                                       </mask>
                                       <path fill="#EA4335" d="M0.894,4.3291 L3.478,6.4431 C4.113,4.5611 5.843,3.1671 7.889,3.1671 C9.018,3.1451 10.102,3.5781 10.912,4.3671 L13.169,2.0781 C11.733,0.7231 9.85,-0.0219 7.889,0.0001 C4.941,0.0001 2.245,1.6791 0.894,4.3291" mask="url(#google-mark-d)"></path>
                                    </g>
                                 </svg>
                                 <svg class="w-commerce-commercequickcheckoutmicrosofticon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <g fill="none" fill-rule="evenodd">
                                       <polygon fill="#F05022" points="7 7 1 7 1 1 7 1"></polygon>
                                       <polygon fill="#7DB902" points="15 7 9 7 9 1 15 1"></polygon>
                                       <polygon fill="#00A4EE" points="7 15 1 15 1 9 7 9"></polygon>
                                       <polygon fill="#FFB700" points="15 15 9 15 9 9 15 9"></polygon>
                                    </g>
                                 </svg>
                                 <div>Pay with browser.</div>
                              </a>
                           </div>
                           <a href="/checkout" value="Continue to Checkout" class="w-commerce-commercecartcheckoutbutton button full" data-loading-text="Hang Tight..." data-node-type="cart-checkout-button">Continue to Checkout</a>
                        </div>
                     </div>
                  </form>
                  <div class="w-commerce-commercecartemptystate empty-state">
                     <div aria-label="This cart is empty" aria-live="polite" class="subhead">No items found.</div>
                     <div class="margin-60px flex make-20px">
                        <a href="/plans" class="button-line w-inline-block">
                           <div>view Plans</div>
                           <div class="line-bottom"></div>
                        </a>
                     </div>
                  </div>
                  <div aria-live="assertive" style="display:none" data-node-type="commerce-cart-error" class="w-commerce-commercecarterrorstate error-message">
                     <div class="w-cart-error-msg" data-w-cart-quantity-error="Product is not available in this quantity." data-w-cart-general-error="Something went wrong when adding this item to the cart." data-w-cart-checkout-error="Checkout is disabled on this site." data-w-cart-cart_order_min-error="The order minimum was not met. Add more items to your cart to continue." data-w-cart-subscription_error-error="Before you purchase, please use your email invite to verify your address so we can send order updates.">Product is not available in this quantity.</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="menu-button w-nav-button">
         <div data-is-ix2-target="1" class="lottie-white" data-w-id="5e31057a-541e-ead9-75ae-97c28eec0320" data-animation-type="lottie" data-src="https://cdn.prod.website-files.com/66e161954112950aa7f51fa6/66e2ab19ef1c9f95ebb9c1d3_Animation%20-%201726130931764.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="0.5" data-duration="0"></div>
      </div>
   </div>
</div>
<div class="hero-wrapper">
   <div data-w-id="4c7885a2-6b15-7028-72d6-d7da8408e21f" class="hero-interaction"></div>
   <div class="hero-first">
      <div class="hero-preview">
         <div class="hero-content">
            <div id="w-node-_4c7885a2-6b15-7028-72d6-d7da8408e223-1821edb6" class="hero-text-wrapper">
               <div class="hero-home-flex">
                  <div class="hero-overflow-title">
                     <div class="top-title-overflow">
                        <h1 class="hero-main-title">Digital creative studio</h1>
                     </div>
                  </div>
                  <div class="main-strip">
                     <div id="w-node-_4c7885a2-6b15-7028-72d6-d7da8408e226-1821edb6" class="hero-images left">
                        <div class="main-image third"><img sizes="(max-width: 3110px) 100vw, 3110px" srcset="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef89_work-7.avif 500w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef89_work-7.avif 800w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef89_work-7.avif 1080w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef89_work-7.avif 1600w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef89_work-7.avif 3110w" alt="" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef89_work-7.avif" loading="eager" class="image-fill"/></div>
                        <div class="main-image fourth"><img sizes="(max-width: 3000px) 100vw, 3000px" srcset="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef88_work-10.avif 500w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef88_work-10.avif 800w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef88_work-10.avif 1080w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef88_work-10.avif 1600w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef88_work-10.avif 3000w" alt="" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef88_work-10.avif" loading="eager" class="image-fill"/></div>
                        <div class="main-image seven"></div>
                        <div class="main-image eight"></div>
                     </div>
                  </div>
                  <div class="main-strip right">
                     <div id="w-node-_4c7885a2-6b15-7028-72d6-d7da8408e232-1821edb6" class="hero-images right-slide">
                        <div class="main-image second"><img width="360" loading="eager" alt="" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef64_scroll-down.avif"/></div>
                        <div class="main-image first"><img sizes="(max-width: 2411px) 100vw, 2411px" srcset="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef87_work-1.avif 500w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef87_work-1.avif 800w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef87_work-1.avif 1080w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef87_work-1.avif 2411w" alt="" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef87_work-1.avif" loading="eager" class="image-fill"/></div>
                        <div class="main-image sixth"><img sizes="(max-width: 3000px) 100vw, 3000px" srcset="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef8a_work-11.avif 500w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef8a_work-11.avif 800w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef8a_work-11.avif 3000w" alt="" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef8a_work-11.avif" loading="eager" class="image-fill"/></div>
                        <div class="main-image fifth"><img sizes="(max-width: 2411px) 100vw, 2411px" srcset="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821eee7_work-5-p-500.jpg 500w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821eee7_work-5-p-800.jpg 800w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821eee7_work-5-p-1080.jpg 1080w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821eee7_work-5-p-1600.jpg 1600w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821eee7_work-5-p-2000.jpg 2000w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821eee7_work-5.jpg 2411w" alt="" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821eee7_work-5.jpg" loading="eager" class="image-fill"/></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<section class="section for-logo">
   <div class="container">
      <div class="flex-center">
         <div class="fade-in-wrapper">
            <p class="subhead-main _80">Line Studio® is a versatile creative studio specializing in Branding, Web Design, and Development. We empower clients to elevate their brands, expand their reach, and distinguish themselves in their industry through impactful solutions and innovative design.</p>
            <div data-w-id="86ec7914-040d-c101-5745-42e5503cbb31" class="fade-gradient"></div>
            <div class="button-flex">
               <a data-w-id="37a7a25e-6843-2127-466f-af93e5b02b9c" href="/about" class="button-3d w-inline-block">
                  <div class="button-inner">
                     <div class="button-face static">
                        <div>About us</div>
                     </div>
                     <div class="button-face hover">
                        <div>About us</div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="w-layout-grid logo-grid-list">
            <div id="w-node-_54c078dc-e027-3620-05b0-8ab9ecc3e7d2-1821edb6" class="logo-grid-wrapper">
               <div class="logo-grid-mask">
                  <div style="-webkit-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="logo-grid-track"><img loading="lazy" height="Auto" alt="" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef56_logo-3.avif" class="logo-client"/><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef05_logo-1.avif" alt="" class="logo-client"/><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef56_logo-3.avif" alt="" class="logo-client"/></div>
               </div>
            </div>
            <div id="w-node-_54c078dc-e027-3620-05b0-8ab9ecc3e7d8-1821edb6" class="logo-grid-wrapper">
               <div class="logo-grid-mask">
                  <div style="-webkit-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="logo-grid-track"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef0c_logo-9.avif" alt="" class="logo-client"/><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef56_logo-3.avif" alt="" class="logo-client"/><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef0c_logo-9.avif" alt="" class="logo-client"/></div>
               </div>
            </div>
            <div id="w-node-_54c078dc-e027-3620-05b0-8ab9ecc3e7de-1821edb6" class="logo-grid-wrapper">
               <div class="logo-grid-mask">
                  <div style="-webkit-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="logo-grid-track"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef0b_logo-11.avif" alt="" class="logo-client"/><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef03_logo-4.avif" alt="" class="logo-client"/><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef0b_logo-11.avif" alt="" class="logo-client"/></div>
               </div>
            </div>
            <div id="w-node-_54c078dc-e027-3620-05b0-8ab9ecc3e7e4-1821edb6" class="logo-grid-wrapper">
               <div class="logo-grid-mask">
                  <div style="-webkit-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="logo-grid-track"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef54_logo-5.avif" alt="" class="logo-client"/><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef0b_logo-11.avif" alt="" class="logo-client"/><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef54_logo-5.avif" alt="" class="logo-client"/></div>
               </div>
            </div>
            <div id="w-node-_54c078dc-e027-3620-05b0-8ab9ecc3e7ea-1821edb6" class="logo-grid-wrapper">
               <div class="logo-grid-mask">
                  <div style="-webkit-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="logo-grid-track"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef0f_logo-10.avif" alt="" class="logo-client"/><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef02_logo-2.avif" alt="" class="logo-client"/><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef0f_logo-10.avif" alt="" class="logo-client"/></div>
               </div>
            </div>
            <div id="w-node-_54c078dc-e027-3620-05b0-8ab9ecc3e7f0-1821edb6" class="logo-grid-wrapper">
               <div class="logo-grid-mask">
                  <div style="-webkit-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="logo-grid-track"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef05_logo-1.avif" alt="" class="logo-client"/><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef0f_logo-10.avif" alt="" class="logo-client"/><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef05_logo-1.avif" alt="" class="logo-client"/></div>
               </div>
            </div>
            <div id="w-node-_54c078dc-e027-3620-05b0-8ab9ecc3e7f6-1821edb6" class="logo-grid-wrapper">
               <div class="logo-grid-mask">
                  <div style="-webkit-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="logo-grid-track"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef66_logo-4.avif" alt="" class="logo-client"/><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef0c_logo-9.avif" alt="" class="logo-client"/><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef66_logo-4.avif" alt="" class="logo-client"/></div>
               </div>
            </div>
            <div id="w-node-_54c078dc-e027-3620-05b0-8ab9ecc3e7fc-1821edb6" class="logo-grid-wrapper">
               <div class="logo-grid-mask">
                  <div style="-webkit-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="logo-grid-track"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef02_logo-2.avif" alt="" class="logo-client"/><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef54_logo-5.avif" alt="" class="logo-client"/><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef02_logo-2.avif" alt="" class="logo-client"/></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="section for-work">
   <div class="container">
      <div>
         <div class="w-dyn-list">
            <div role="list" class="project-flex w-dyn-items">
               <div role="listitem" class="w-dyn-item">
                  <div class="work-wrapper">
                     <div data-w-id="6319eb54-4678-f1c2-df90-4c7184478370" class="image-wrap"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee19_work-1-big.avif" alt="" sizes="100vw" srcset="https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee19_work-1-big.avif 500w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee19_work-1-big.avif 800w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee19_work-1-big.avif 1080w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee19_work-1-big.avif 2000w" class="paralax-image"/></div>
                     <div class="title-wrapper">
                        <h2 class="work-title">Creative Pulse</h2>
                        <div class="button-flex _20px">
                           <a data-w-id="8d60c3ad-c2ae-eb14-7c41-af45ec64a523" href="/project/creative-pulse" class="button-3d w-inline-block">
                              <div class="button-inner">
                                 <div class="button-face static">
                                    <div>view more</div>
                                 </div>
                                 <div class="button-face hover">
                                    <div>view more</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="work-overlay"></div>
                     <div class="top-part">
                        <p class="top-text">UI, UX, Development</p>
                        <p class="top-text">CSS Award</p>
                     </div>
                  </div>
               </div>
               <div role="listitem" class="w-dyn-item">
                  <div class="work-wrapper">
                     <div data-w-id="6319eb54-4678-f1c2-df90-4c7184478370" class="image-wrap"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821eee4_work-3-big.avif" alt="" sizes="100vw" srcset="https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821eee4_work-3-big.avif 500w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821eee4_work-3-big.avif 800w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821eee4_work-3-big.avif 1080w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821eee4_work-3-big.avif 2000w" class="paralax-image"/></div>
                     <div class="title-wrapper">
                        <h2 class="work-title">Design Surge</h2>
                        <div class="button-flex _20px">
                           <a data-w-id="8d60c3ad-c2ae-eb14-7c41-af45ec64a523" href="/project/design-surge" class="button-3d w-inline-block">
                              <div class="button-inner">
                                 <div class="button-face static">
                                    <div>view more</div>
                                 </div>
                                 <div class="button-face hover">
                                    <div>view more</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="work-overlay"></div>
                     <div class="top-part">
                        <p class="top-text">Logo, User Interface</p>
                        <p class="top-text">Awwwards</p>
                     </div>
                  </div>
               </div>
               <div role="listitem" class="w-dyn-item">
                  <div class="work-wrapper">
                     <div data-w-id="6319eb54-4678-f1c2-df90-4c7184478370" class="image-wrap"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee49_work-5-big.avif" alt="" sizes="100vw" srcset="https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee49_work-5-big.avif 500w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee49_work-5-big.avif 800w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee49_work-5-big.avif 1080w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee49_work-5-big.avif 2000w" class="paralax-image"/></div>
                     <div class="title-wrapper">
                        <h2 class="work-title">Vision Craft</h2>
                        <div class="button-flex _20px">
                           <a data-w-id="8d60c3ad-c2ae-eb14-7c41-af45ec64a523" href="/project/vision-craft" class="button-3d w-inline-block">
                              <div class="button-inner">
                                 <div class="button-face static">
                                    <div>view more</div>
                                 </div>
                                 <div class="button-face hover">
                                    <div>view more</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="work-overlay"></div>
                     <div class="top-part">
                        <p class="top-text">Logo, User Interface</p>
                        <p class="top-text">Awwwards</p>
                     </div>
                  </div>
               </div>
               <div role="listitem" class="w-dyn-item">
                  <div class="work-wrapper">
                     <div data-w-id="6319eb54-4678-f1c2-df90-4c7184478370" class="image-wrap"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821eee5_work-2-big.avif" alt="" sizes="100vw" srcset="https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821eee5_work-2-big.avif 500w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821eee5_work-2-big.avif 800w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821eee5_work-2-big.avif 2000w" class="paralax-image"/></div>
                     <div class="title-wrapper">
                        <h2 class="work-title">Brand Bloom</h2>
                        <div class="button-flex _20px">
                           <a data-w-id="8d60c3ad-c2ae-eb14-7c41-af45ec64a523" href="/project/brand-bloom" class="button-3d w-inline-block">
                              <div class="button-inner">
                                 <div class="button-face static">
                                    <div>view more</div>
                                 </div>
                                 <div class="button-face hover">
                                    <div>view more</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="work-overlay"></div>
                     <div class="top-part">
                        <p class="top-text">UI, UX, Development</p>
                        <p class="top-text">CSS Award</p>
                     </div>
                  </div>
               </div>
               <div role="listitem" class="w-dyn-item">
                  <div class="work-wrapper">
                     <div data-w-id="6319eb54-4678-f1c2-df90-4c7184478370" class="image-wrap"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee9e_work-4-big.avif" alt="" sizes="100vw" srcset="https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee9e_work-4-big.avif 500w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee9e_work-4-big.avif 800w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee9e_work-4-big.avif 1080w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee9e_work-4-big.avif 2000w" class="paralax-image"/></div>
                     <div class="title-wrapper">
                        <h2 class="work-title">Impact Edge</h2>
                        <div class="button-flex _20px">
                           <a data-w-id="8d60c3ad-c2ae-eb14-7c41-af45ec64a523" href="/project/impact-edge" class="button-3d w-inline-block">
                              <div class="button-inner">
                                 <div class="button-face static">
                                    <div>view more</div>
                                 </div>
                                 <div class="button-face hover">
                                    <div>view more</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="work-overlay"></div>
                     <div class="top-part">
                        <p class="top-text">Font, User Interface</p>
                        <p class="top-text">CSS Award</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="section">
   <div class="container">
      <div>
         <div class="container">
            <div class="founder-wrapper">
               <div data-w-id="6c0146b9-e3d5-87b1-faf6-c03d2d3f7d2b" class="image-wrap cricle"><img src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef86_team-5.avif" loading="lazy" sizes="100vw" srcset="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef86_team-5.avif 500w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef86_team-5.avif 800w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef86_team-5.avif 1080w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef86_team-5.avif 1500w" alt="" class="paralax-image"/></div>
            </div>
            <div class="margin-40px">
               <p class="testimonials-text">&quot;Working with LINE Studio was an exceptional experience from start to finish.&quot;</p>
               <div class="line-divider"></div>
               <div data-w-id="d0fa6e71-50e3-f65a-4c81-c7572f4985c1" class="fade-gradient"></div>
            </div>
            <div>
               <div class="fun-facts-grid _3-column">
                  <div class="align-center">
                     <h3 class="fun-number">19</h3>
                     <p>Featured work</p>
                     <div data-w-id="b114e894-f75f-90e7-13e7-933fde457f9c" class="fade-gradient"></div>
                  </div>
                  <div class="align-center">
                     <h3 class="fun-number">350+</h3>
                     <p>Projected Completed</p>
                     <div data-w-id="f0560cc0-9630-8fac-3152-ea9b45fe6a69" class="fade-gradient"></div>
                  </div>
                  <div class="align-center">
                     <h3 class="fun-number">39x</h3>
                     <p>Awwwards Featured</p>
                     <div data-w-id="4662352a-c9ae-c6c9-42e4-d559c4c03d62" class="fade-gradient"></div>
                  </div>
               </div>
            </div>
            <div class="margin-250px">
               <div class="flex-center">
                  <div class="fade-in-wrapper">
                     <p class="subhead-main _80">Our expertise is in designing visuals that effectively connect with the target audience.</p>
                     <div data-w-id="ccdb0186-3d4c-a563-d43b-eefe5202a68c" class="fade-gradient"></div>
                     <div class="button-flex">
                        <a data-w-id="ccdb0186-3d4c-a563-d43b-eefe5202a68e" href="/contact" class="button-3d w-inline-block">
                           <div class="button-inner">
                              <div class="button-face static">
                                 <div>work with us</div>
                              </div>
                              <div class="button-face hover">
                                 <div>work with us</div>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="section for-work">
   <div class="home-services-item sticky">
      <div data-w-id="1ce17cd0-1d31-8053-2829-2a30393c947e" class="image-wrap mobile-auto"><img src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef38_service-2-big.avif" loading="lazy" width="1000" alt="" class="paralax-image"/></div>
      <div class="services-left-content">
         <div>
            <div>
               <h3 class="service-title">strategy</h3>
            </div>
            <p class="subhead-main left">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="margin-40px">
               <div class="service-flex">
                  <div class="service-content">Media Strategy</div>
                  <div class="service-content">Video</div>
                  <div class="service-content">Engaging</div>
                  <div class="service-content">Storytelling</div>
               </div>
            </div>
         </div>
         <div class="margin-50px">
            <a data-w-id="b1675723-e9c6-0c74-a764-e78576f3c662" href="/plans" class="button-3d w-inline-block">
               <div class="button-inner">
                  <div class="button-face static">
                     <div>Explore Plans</div>
                  </div>
                  <div class="button-face hover">
                     <div>Explore Plans</div>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div>
   <div class="home-services-item sticky reverse">
      <div class="services-left-content">
         <div>
            <div>
               <h3 class="service-title">ui/ux design</h3>
            </div>
            <p class="subhead-main left">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="margin-40px">
               <div class="service-flex">
                  <div class="service-content">Media Strategy</div>
                  <div class="service-content">Video</div>
                  <div class="service-content">Engaging</div>
                  <div class="service-content">Storytelling</div>
               </div>
            </div>
         </div>
         <div class="margin-50px">
            <a data-w-id="4e5146ed-87bf-7d7e-4641-5a1a6d0aae50" href="#" class="button-3d w-inline-block">
               <div class="button-inner">
                  <div class="button-face static">
                     <div>Explore Plans</div>
                  </div>
                  <div class="button-face hover">
                     <div>Explore Plans</div>
                  </div>
               </div>
            </a>
         </div>
      </div>
      <div data-w-id="66d77d67-602e-1166-96b4-866bbc1c7e1e" class="image-wrap mobile-auto"><img src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef39_service-3-big.avif" loading="lazy" width="1000" alt="" class="paralax-image"/></div>
   </div>
   <div class="home-services-item sticky">
      <div data-w-id="cceb84f9-ba67-4e1f-4418-bbcb5ec7ee0e" class="image-wrap mobile-auto"><img src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef35_service-1-big.avif" loading="lazy" width="1000" alt="" class="paralax-image"/></div>
      <div class="services-left-content">
         <div>
            <div>
               <h3 class="service-title">web design</h3>
            </div>
            <p class="subhead-main left">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="margin-40px">
               <div class="service-flex">
                  <div class="service-content">Wire framing</div>
                  <div class="service-content">Figma</div>
                  <div class="service-content">Engaging</div>
                  <div class="service-content">Storytelling</div>
               </div>
            </div>
         </div>
         <div class="margin-50px">
            <a data-w-id="cceb84f9-ba67-4e1f-4418-bbcb5ec7ee24" href="#" class="button-3d w-inline-block">
               <div class="button-inner">
                  <div class="button-face static">
                     <div>Explore Plans</div>
                  </div>
                  <div class="button-face hover">
                     <div>Explore Plans</div>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div>
</section>
<section class="section">
   <div class="container">
      <div>
         <div class="flex-big">
            <h2 data-w-id="a111d9e7-5ad7-8eb1-c724-86fe9c50f964" class="big-text">Straight</h2>
         </div>
         <div class="flex-big">
            <h2 class="big-text">to the</h2>
            <div data-w-id="86402a74-dd68-65ee-0ee5-50d155730def" class="image-wrap square"><img src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef5f_work-6-big.avif" loading="lazy" sizes="100vw" srcset="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef5f_work-6-big.avif 500w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef5f_work-6-big.avif 800w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef5f_work-6-big.avif 1080w, https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ef5f_work-6-big.avif 2000w" alt="" class="paralax-image"/></div>
         </div>
         <div class="flex-big">
            <h2 class="big-text">bold ideas</h2>
         </div>
      </div>
      <div class="margin-250px">
         <div class="flex-center">
            <div class="fade-in-wrapper">
               <p class="subhead-main _80">Discover the latest tips and insights to keep you ahead of the curve.</p>
               <div data-w-id="28cdca35-d650-395e-b50c-879d9da9b65a" class="fade-gradient"></div>
               <div class="button-flex">
                  <a data-w-id="28cdca35-d650-395e-b50c-879d9da9b65c" href="/blog" class="button-3d w-inline-block">
                     <div class="button-inner">
                        <div class="button-face static">
                           <div>view all</div>
                        </div>
                        <div class="button-face hover">
                           <div>view all</div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <div class="margin-100px">
            <div class="w-dyn-list">
               <div role="list" class="blog-grid w-dyn-items">
                  <div role="listitem" class="w-dyn-item">
                     <a href="/post/building-an-online-community" class="blog-main-wrapper w-inline-block">
                        <div class="button-icon-main">
                           <div class="buton-icon-svg w-embed">
                              <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M7 17L17 7M17 7H7M17 7V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </div>
                           <div class="buton-icon-svg is-absolute w-embed">
                              <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M7 17L17 7M17 7H7M17 7V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </div>
                        </div>
                        <div data-w-id="08a84c25-c229-a16e-2821-6c7763635782" class="image-wrap auto"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee31_blog-3.avif" alt="" sizes="100vw" srcset="https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee31_blog-3.avif 500w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee31_blog-3.avif 800w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee31_blog-3.avif 2048w" class="paralax-image"/></div>
                        <div class="margin-30px">
                           <div class="data-flex">
                              <div class="data-inside">
                                 <div class="data-image invert"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ede5_data-light.svg" alt=""/></div>
                                 <p class="data-text">October 8, 2023</p>
                              </div>
                              <div class="data-inside">
                                 <div class="data-image invert"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ede3_time-light.svg" alt=""/></div>
                                 <p class="data-text">5</p>
                                 <p class="data-text"> min read</p>
                              </div>
                           </div>
                        </div>
                        <div class="margin-15px">
                           <div>Building an Online Community</div>
                        </div>
                     </a>
                  </div>
                  <div role="listitem" class="w-dyn-item">
                     <a href="/post/content-marketing-strategies" class="blog-main-wrapper w-inline-block">
                        <div class="button-icon-main">
                           <div class="buton-icon-svg w-embed">
                              <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M7 17L17 7M17 7H7M17 7V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </div>
                           <div class="buton-icon-svg is-absolute w-embed">
                              <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M7 17L17 7M17 7H7M17 7V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </div>
                        </div>
                        <div data-w-id="08a84c25-c229-a16e-2821-6c7763635782" class="image-wrap auto"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee78_service-2-big.avif" alt="" sizes="100vw" srcset="https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee78_service-2-big.avif 500w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee78_service-2-big.avif 800w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee78_service-2-big.avif 1080w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821ee78_service-2-big.avif 2000w" class="paralax-image"/></div>
                        <div class="margin-30px">
                           <div class="data-flex">
                              <div class="data-inside">
                                 <div class="data-image invert"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ede5_data-light.svg" alt=""/></div>
                                 <p class="data-text">October 6, 2023</p>
                              </div>
                              <div class="data-inside">
                                 <div class="data-image invert"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ede3_time-light.svg" alt=""/></div>
                                 <p class="data-text">3</p>
                                 <p class="data-text"> min read</p>
                              </div>
                           </div>
                        </div>
                        <div class="margin-15px">
                           <div>Content Marketing Strategies</div>
                        </div>
                     </a>
                  </div>
                  <div role="listitem" class="w-dyn-item">
                     <a href="/post/social-media-marketing-tips" class="blog-main-wrapper w-inline-block">
                        <div class="button-icon-main">
                           <div class="buton-icon-svg w-embed">
                              <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M7 17L17 7M17 7H7M17 7V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </div>
                           <div class="buton-icon-svg is-absolute w-embed">
                              <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M7 17L17 7M17 7H7M17 7V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </div>
                        </div>
                        <div data-w-id="08a84c25-c229-a16e-2821-6c7763635782" class="image-wrap auto"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821eed1_blog-6.avif" alt="" sizes="100vw" srcset="https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821eed1_blog-6.avif 500w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821eed1_blog-6.avif 800w, https://cdn.prod.website-files.com/6881cee5d14e86221821edda/6881cee5d14e86221821eed1_blog-6.avif 2048w" class="paralax-image"/></div>
                        <div class="margin-30px">
                           <div class="data-flex">
                              <div class="data-inside">
                                 <div class="data-image invert"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ede5_data-light.svg" alt=""/></div>
                                 <p class="data-text">October 4, 2023</p>
                              </div>
                              <div class="data-inside">
                                 <div class="data-image invert"><img loading="lazy" src="https://cdn.prod.website-files.com/6881cee5d14e86221821ed7d/6881cee5d14e86221821ede3_time-light.svg" alt=""/></div>
                                 <p class="data-text">5</p>
                                 <p class="data-text"> min read</p>
                              </div>
                           </div>
                        </div>
                        <div class="margin-15px">
                           <div>Social Media Marketing Tips</div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection
