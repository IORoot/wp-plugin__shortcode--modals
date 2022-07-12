
<div id="top"></div>

<div align="center">

<img src="https://svg-rewriter.sachinraja.workers.dev/?url=https%3A%2F%2Fcdn.jsdelivr.net%2Fnpm%2F%40mdi%2Fsvg%406.7.96%2Fsvg%2Fcode-array.svg&fill=%23701A75&width=200px&height=200px" style="width:200px;"/>

<h3 align="center">Shortcode : Modals</h3>

<p align="center">
    A Simple shortcode for modals
</p>    
</div>

##  1. <a name='TableofContents'></a>Table of Contents


* 1. [Table of Contents](#TableofContents)
* 2. [About The Project](#AboutTheProject)
	* 2.1. [Built With](#BuiltWith)
	* 2.2. [Installation](#Installation)
* 3. [Usage](#Usage)
	* 3.1. [The Javascript](#TheJavascript)
	* 3.2. [Media Query](#MediaQuery)
* 4. [Troubleshooting](#Troubleshooting)
* 5. [Contributing](#Contributing)
* 6. [License](#License)
* 7. [Contact](#Contact)
* 8. [Changelog](#Changelog)


##  2. <a name='AboutTheProject'></a>About The Project


These are modals based on the `<input type="checkbox">` trick.

Doesn't rely on anything or have any dependencies.

<p align="right">(<a href="#top">back to top</a>)</p>



###  2.1. <a name='BuiltWith'></a>Built With

This project was built with the following frameworks, technologies and software.

* [PHP](https://php.net/)
* [Wordpress](https://wordpress.org/)
* [Composer](https://getcomposer.org/)
* [Tailwind](https://tailwindcss.com/)

<p align="right">(<a href="#top">back to top</a>)</p>




###  2.2. <a name='Installation'></a>Installation

These are the steps to get up and running with this plugin.

1. Clone the repo into your wordpress plugin folder
    ```sh
    git clone https://github.com/IORoot/wp-plugin__shortcode--modals ./wp-content/plugins/shortcode-modals
    ```
1. Composer.
    ```sh
    cd ./wp-content/plugins/shortcode-modals
    composer install
    ```

<p align="right">(<a href="#top">back to top</a>)</p>



##  3. <a name='Usage'></a>Usage


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


###  3.1. <a name='TheJavascript'></a>The Javascript

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

###  3.2. <a name='MediaQuery'></a>Media Query

This will change shape based on mobile too. (767px)

##  4. <a name='Troubleshooting'></a>Troubleshooting
none.

<p align="right">(<a href="#top">back to top</a>)</p>

##  5. <a name='Contributing'></a>Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue.
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



##  6. <a name='License'></a>License

Distributed under the MIT License.

MIT License

Copyright (c) 2022 Andy Pearson

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

<p align="right">(<a href="#top">back to top</a>)</p>



##  7. <a name='Contact'></a>Contact

Author Link: [https://github.com/IORoot](https://github.com/IORoot)

<p align="right">(<a href="#top">back to top</a>)</p>

##  8. <a name='Changelog'></a>Changelog

v1.0.0 - initial version
