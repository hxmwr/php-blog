
<!DOCTYPE html>
<html>
  <head>
    <title>博文编辑器</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/4.0.5/es5-shim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/lodash/2.4.1/lodash.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/3.2.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/highlight.js/9.1.0/styles/github.min.css">
    <script src="https://markdown-it.github.io/markdown-it.js"></script>
    <script src="https://twemoji.maxcdn.com/twemoji.min.js"></script>
    <link rel="stylesheet" href="https://markdown-it.github.io/index.css">
    <!-- <script src="https://markdown-it.github.io/index.js"></script> -->
    <script type="text/javascript" src="/static/js/index.js"></script>
    <!-- Ancient IE support - load shiv & kill broken highlighter--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script>window.hljs = null;</script>
    <![endif]-->
    <!-- GA counter-->
    <script>
      // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      
      // ga('create', 'UA-26895916-4', 'auto');
      // ga('require', 'displayfeatures');
      // ga('require', 'linkid', 'linkid.js');
      // ga('send', 'pageview');
      
    </script>
  </head>
  <body>
    <div class="container-fluid">
      <h1>
        博文编辑器
         <small>markdown格式</small>
      </h1>
      <div>
        <div class="form-group">
          <input type="text" id="title" class="form-control" placeholder="在此键入文章标题" name="">
        </div>
      </div>
      <div class="form-inline demo-options">
        <div class="checkbox not-strict">
          <label title="enable html tags in source text" class="_tip">
            <input id="html" type="checkbox"> html
          </label>
        </div>
        <div class="checkbox not-strict">
          <label title="produce xtml output (add / to single tags (&lt;br /&gt; instead of &lt;br&gt;)" class="_tip">
            <input id="xhtmlOut" type="checkbox"> xhtmlOut
          </label>
        </div>
        <div class="checkbox not-strict">
          <label title="newlines in paragraphs are rendered as &lt;br&gt;" class="_tip">
            <input id="breaks" type="checkbox"> breaks
          </label>
        </div>
        <div class="checkbox not-strict">
          <label title="autoconvert link-like texts to links" class="_tip">
            <input id="linkify" type="checkbox"> linkify
          </label>
        </div>
        <div class="checkbox not-strict">
          <label title="do typographyc replacements, (c) -&gt; © and so on" class="_tip">
            <input id="typographer" type="checkbox"> typographer
          </label>
        </div>
        <div class="checkbox not-strict">
          <label title="enable output highlight for fenced blocks" class="_tip">
            <input id="_highlight" type="checkbox"> highlight
          </label>
        </div>
        <div class="form-group">
          <select class="form-control" id="category">
            <?php echo Categories() ?>
          </select>
        </div>
        <div class="form-group not-strict">
          <input id="tags" type="text" placeholder="输入逗号间隔的标签" title="css class language prefix for fenced code blocks" class="form-control _tip">
        </div>
        <!-- <div class="checkbox">
          <label title="force strict CommonMark mode - output will be equal to reference parser" class="_tip">
            <input id="_strict" type="checkbox"> CommonMark strict
          </label>
        </div> -->
        <div class="form-group">
          <button id="btn-submit" class="btn btn-primary">把文章标题和内容一起提交到服务器</button>
        </div>
      </div>

    </div>
    <div class="container-fluid full-height">
      <div class="row full-height">
        <div class="col-xs-6 full-height">
          <div class="demo-control"><a href="#" class="source-clear">clear</a><a id="permalink" href="./" title="Share this snippet as link"><strong>permalink</strong></a></div>
          <textarea class="source full-height">---
__Advertisement :)__

- __[pica](https://nodeca.github.io/pica/demo/)__ - high quality and fast image
  resize in browser.
- __[babelfish](https://github.com/nodeca/babelfish/)__ - developer friendly
  i18n with plurals support and easy syntax.

You will like those projects!

---

# h1 Heading 8-)
## h2 Heading
### h3 Heading
#### h4 Heading
##### h5 Heading
###### h6 Heading


## Horizontal Rules

___

---

***


## Typographic replacements

Enable typographer option to see result.

(c) (C) (r) (R) (tm) (TM) (p) (P) +-

test.. test... test..... test?..... test!....

!!!!!! ???? ,,  -- ---

&quot;Smartypants, double quotes&quot; and 'single quotes'


## Emphasis

**This is bold text**

__This is bold text__

*This is italic text*

_This is italic text_

~~Strikethrough~~


## Blockquotes


&gt; Blockquotes can also be nested...
&gt;&gt; ...by using additional greater-than signs right next to each other...
&gt; &gt; &gt; ...or with spaces between arrows.


## Lists

Unordered

+ Create a list by starting a line with `+`, `-`, or `*`
+ Sub-lists are made by indenting 2 spaces:
  - Marker character change forces new list start:
    * Ac tristique libero volutpat at
    + Facilisis in pretium nisl aliquet
    - Nulla volutpat aliquam velit
+ Very easy!

Ordered

1. Lorem ipsum dolor sit amet
2. Consectetur adipiscing elit
3. Integer molestie lorem at massa


1. You can use sequential numbers...
1. ...or keep all the numbers as `1.`

Start numbering with offset:

57. foo
1. bar


## Code

Inline `code`

Indented code

    // Some comments
    line 1 of code
    line 2 of code
    line 3 of code


Block code &quot;fences&quot;

```
Sample text here...
```

Syntax highlighting

``` js
var foo = function (bar) {
  return bar++;
};

console.log(foo(5));
```

## Tables

| Option | Description |
| ------ | ----------- |
| data   | path to data files to supply the data that will be passed into templates. |
| engine | engine to be used for processing templates. Handlebars is the default. |
| ext    | extension to be used for dest files. |

Right aligned columns

| Option | Description |
| ------:| -----------:|
| data   | path to data files to supply the data that will be passed into templates. |
| engine | engine to be used for processing templates. Handlebars is the default. |
| ext    | extension to be used for dest files. |


## Links

[link text](http://dev.nodeca.com)

[link with title](http://nodeca.github.io/pica/demo/ &quot;title text!&quot;)

Autoconverted link https://github.com/nodeca/pica (enable linkify to see)


## Images

![Minion](https://octodex.github.com/images/minion.png)
![Stormtroopocat](https://octodex.github.com/images/stormtroopocat.jpg &quot;The Stormtroopocat&quot;)

Like links, Images also have a footnote style syntax

![Alt text][id]

With a reference later in the document defining the URL location:

[id]: https://octodex.github.com/images/dojocat.jpg  &quot;The Dojocat&quot;


## Plugins

The killer feature of `markdown-it` is very effective support of
[syntax plugins](https://www.npmjs.org/browse/keyword/markdown-it-plugin).


### [Emojies](https://github.com/markdown-it/markdown-it-emoji)

&gt; Classic markup: :wink: :crush: :cry: :tear: :laughing: :yum:
&gt;
&gt; Shortcuts (emoticons): :-) :-( 8-) ;)

see [how to change output](https://github.com/markdown-it/markdown-it-emoji#change-output) with twemoji.


### [Subscript](https://github.com/markdown-it/markdown-it-sub) / [Superscript](https://github.com/markdown-it/markdown-it-sup)

- 19^th^
- H~2~O


### [\&lt;ins&gt;](https://github.com/markdown-it/markdown-it-ins)

++Inserted text++


### [\&lt;mark&gt;](https://github.com/markdown-it/markdown-it-mark)

==Marked text==


### [Footnotes](https://github.com/markdown-it/markdown-it-footnote)

Footnote 1 link[^first].

Footnote 2 link[^second].

Inline footnote^[Text of inline footnote] definition.

Duplicated footnote reference[^second].

[^first]: Footnote **can have markup**

    and multiple paragraphs.

[^second]: Footnote text.


### [Definition lists](https://github.com/markdown-it/markdown-it-deflist)

Term 1

:   Definition 1
with lazy continuation.

Term 2 with *inline markup*

:   Definition 2

        { some code, part of Definition 2 }

    Third paragraph of definition 2.

_Compact style:_

Term 1
  ~ Definition 1

Term 2
  ~ Definition 2a
  ~ Definition 2b


### [Abbreviations](https://github.com/markdown-it/markdown-it-abbr)

This is HTML abbreviation example.

It converts &quot;HTML&quot;, but keep intact partial entries like &quot;xxxHTMLyyy&quot; and so on.

*[HTML]: Hyper Text Markup Language

### [Custom containers](https://github.com/markdown-it/markdown-it-container)

::: warning
*here be dragons*
:::
</textarea>
        </div>
        <section class="col-xs-6 full-height">
          <div class="demo-control"><a href="#" data-result-as="html">html</a><a href="#" data-result-as="src">source</a><a href="#" data-result-as="debug">debug</a></div>
          <div class="result-html full-height"></div>
          <pre class="hljs result-src full-height"><code class="result-src-content full-height"></code></pre>
          <pre class="hljs result-debug full-height"><code class="result-debug-content full-height"></code></pre>
        </section>
      </div>
    </div>
  </body>
</html>