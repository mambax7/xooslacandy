#
# Table structure for table `x100_xca_candy`
#

CREATE TABLE `xca_candy` (
  `xca_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `xca_mid` int(5) unsigned NOT NULL DEFAULT '0',
  `xca_macro` text NOT NULL,
  `xca_html` text NOT NULL,
  `xca_weight` int(5) unsigned NOT NULL DEFAULT '0',
  `xca_active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`xca_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Xoosla Candy table' AUTO_INCREMENT=1 ;

#
# Dumping data for table `x100_xca_candy`
#

INSERT INTO `xca_candy` (`xca_id`, `xca_mid`, `xca_macro`, `xca_html`, `xca_weight`, `xca_active`) VALUES
(1, 0, '[h1]{text}[/h1]', '<h1>{text}</h1>', 0, 1),
(2, 0, '[h2]{text}[/h2]', '<h2>{text}</h2>', 0, 1),
(3, 0, '[h3]{text}[/h3]', '<h3>{text}</h3>', 0, 1),
(4, 0, '[h4]{text}[/h4]', '<h4>{text}</h4>', 0, 1),
(5, 0, '[h5]{text}[/h5]', '<h5>{text}</h5>', 0, 1),
(6, 0, '[b]{text}[/b]', '<strong>{text}</strong>', 0, 1),
(7, 0, '[i]{text}[/i]', '<em>{text}</em>', 0, 1),
(8, 0, '[code]{text}[/code]', '<code>{text}</code>', 0, 1),
(9, 0, '[span class={classname}]{text}[/span]', '<span class="{classname}">{text}</span>', 0, 1),
(10, 0, '[pre]{text}[/pre]', '<pre>{text}</pre>', 0, 1),
(11, 0, '[blockquote]{text}[/blockquote]', '<quote>{text}</quote>', 0, 1),
(12, 0, '[list class={classname}]{alist}[/list]', '<ul class="{classname}">{alist}</ul>', 0, 1),
(13, 0, '[li]{text}[/li]', '<li>{text}</li>', 0, 1),
(14, 0, '[underline]{text}[/underline]', '<span style="text-decoration:underline;">{text}</span>', 0, 1),
(15, 0, '[bold]{text}[/bold]', '<span style="font-weight:bold;">{text}</span>', 0, 1),
(16, 0, '[italic]{text}[/italic]', '<span style="font-style:italic;">{text}</span>', 0, 1),
(17, 0, '[clear]', '<div class="clr"></div>', 0, 1),
(18, 0, '[readon url="{url}"]{text}[/readon]', '<a href="{url}" class="readon">{text}</a>', 0, 1);
