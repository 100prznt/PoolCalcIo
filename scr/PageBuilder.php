<?php

/**
 * Created by PhpStorm.
 * User: Ruemmler, Elias
 * Date: 22.03.2019
 * Time: 14:55
 */

require_once('MetaInfo.php');

class PageBuilder
{
    public $Meta;

    function __construct(MetaInfo $meta)
    {
        $this->Meta = $meta;
    }

    public function GetHeader()
    {
        $meta = new MetaInfo();

        $header = "<head>";
        $header .= $this->AppendLine("<title>$meta->PageTitle</title>");
        $header .= $this->AppendLine("<meta charset=\"utf-8\">");
        $header .= $this->AppendMetaName("author", $meta->Author);
        $header .= $this->AppendMetaName("copyright", $meta->Copyright);
        $header .= $this->AppendMetaName("keywords", $meta->Keywords);
        $header .= $this->AppendMetaName("viewport", "width=device-width, initial-scale=1");
        $header .= $this->AppendMetaProperty("og:locale", "de_DE");
        $header .= $this->AppendMetaProperty("og:title", $meta->OgTitle);
        $header .= $this->AppendMetaProperty("og:type", $meta->OgType);
        $header .= $this->AppendMetaProperty("og:description", $meta->OgDescription);
        $header .= $this->AppendMetaProperty("og:url", $meta->OgUrl);
        $header .= $this->AppendMetaProperty("og:site_name", "100prznt.de");
        $header .= $this->AppendMetaProperty("og:image", $meta->OgImage);
        $header .= $this->AppendMetaProperty("og:image:width", $meta->OgImageWidth);
        $header .= $this->AppendMetaProperty("og:image:height", $meta->OgImageHeight);
        $header .= $this->AppendMetaProperty("article:author", $meta->ArticleAuthor);
        $header .= $this->AppendMetaProperty("article:publisher", $meta->ArticlePublisher);
        $header .= $this->AppendMetaProperty("article:published_time", $meta->ArticlePublishedTime);
        $header .= $this->AppendMetaProperty("fb:app_id", $meta->FbAppId);
        $header .= $this->AppendLine("<link rel=\"stylesheet\" href=\"css/uikit.min.css\" />");
        $header .= $this->AppendLine("<link rel=\"stylesheet\" href=\"css/custom.css\" />");
        $header .= $this->AppendLine("<script src=\"js/uikit.min.js\"></script>");
        $header .= $this->AppendLine("<script src=\"js/uikit-icons.min.js\"></script>");
        $header .= $this->AppendLine("<script src=\"js/jquery-3.3.1.min.js\"></script>");
        $header .= $this->AppendLine("</head>");

        return $header;
    }

    function AppendLine($line)
    {
        return "\n" . $line;
    }

    function AppendMetaName($name, $content)
    {
        return "\n<meta name=\"$name\" content=\"$content\" />";
    }

    function AppendMetaProperty($property, $content)
    {
        return "\n<meta property=\"$property\" content=\"$content\" />";
    }
}