# Simple shortcode for modals

These are modals based on the `<input type="checkbox">` trick.

Doesn't rely on anything or have any dependencies.

## Steps to use.

1. Enable the plugin.

2. Create a new shortcode and place on a page:

```
[andyp_modal id="my-modal" src="https://londonparkour.com"]
```

It takes two arguments:
1. The `ID` will create a unique modal container for you with CSS rules to control it.
2. The `src` will point to to an iframe contents to place into the modal.
   
Once the shortcode is on the page, you just need to be able to trigger it. To do this, you
just have to have a `<label>` that has it's `for=""` attribute pointing to your `ID`.

```
<label class="modal-btn" for="my-modal">
    Click here for My Modal
</label>
```

You don't have to use the `modal-btn` class, it just adds a pointer cursor.


## The Javascript

The onclick method of the button/label will update the `src` of the iframe and load it.
Otherwise, the page has to wait until all modals are loaded.
This is used to lazyload the iFrame.

The label will need an onClick event to load the src.
 
 ```
<label onclick="setsrc('#myiframe')" class="modal-btn" for="my-modal">
    Click here for My Modal
</label>
```

This will look at the iframe's `data-src` value and set that value to `src` to load it.

## Media Query

This will change shape based on mobile too. (767px)