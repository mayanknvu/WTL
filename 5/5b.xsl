<?xml version = "1.0"?>
<xsl:stylesheet version = "1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
<xsl:template match = "RU">
<html>
    <head>
        <title> Style sheet for 5b.xml </title>
    </head>
    
    <body>
        <h2> Shopping </h2>
        <span style = "font-style: italic; color: #A00000;"> Books:</span> <xsl:value-of select = "b" /> <br />
        <span style = "font-style: italic; color: #B00000 ;"> Electronics:</span> <xsl:value-of select = "e" /> <br />
        <span style = "font-style: italic; color: #C00000;"> Stationaries:</span> <xsl:value-of select = "s" /> <br />
        <span style = "font-style: italic; color: #D00000;"> Cloths:</span> <xsl:value-of select = "c" /> <br />
        <span style = "font-style: italic; color: #E00000;"> Appliances:</span> <xsl:value-of select = "a" /> <br />
		<span style = "font-style: italic; color: #EF0000;"> Home:</span> <xsl:value-of select = "h" /> <br />
		<span style = "font-style: italic; color: #F00000;"> Others:</span> <xsl:value-of select = "o" /> <br />
    </body>
</html>
</xsl:template>
</xsl:stylesheet>