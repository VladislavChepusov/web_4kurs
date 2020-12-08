<?xml version="1.0" encoding="UTF-8"?>

<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<body style="font-family: Arial; font-size: 12pt; background-color: #EEE">

   <xsl:for-each select="catalog/cd">
   <td style=" width: 100px;height: 80px;">
			<img   style=" width: 90px;height: 85px; margin-left:auto"><xsl:attribute name="src"><xsl:value-of select="image"/></xsl:attribute></img>
		</td>
      <div style="background-color: teal; color: white; padding: 4px">
	  
         <span style="font-weight: bold">
		 
		 
			<xsl:value-of select="name"/> - </span>
			<xsl:value-of select="group"/>
      </div>
	  
      <div style="margin-left: 20px; margin-bottom: 1em; font-size: 10pt">
         <p><strong> с нами с          
			<xsl:value-of select="data"/>
            <span style="font-style: italic"> (<xsl:value-of select="help"/> полезных ответов)</span>           
		</strong></p>         
	</div>
	<div style="margin-left: 20px; margin-bottom: 1em; font-size: 10pt">
	<span class="txt2" >
	 
		  
		 
			<xsl:value-of select="status"/> </span>
			 
	</div>
	
   </xsl:for-each>
</body>
</html>
