-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 04 月 15 日 09:59
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `robot_tp`
--

-- --------------------------------------------------------

--
-- 表的结构 `robot_editable`
--

CREATE TABLE IF NOT EXISTS `robot_editable` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `group_id` int(5) NOT NULL,
  `editable_title` varchar(50) COLLATE utf8_bin NOT NULL,
  `editable_table` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='summernote编辑表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `robot_editable`
--

INSERT INTO `robot_editable` (`id`, `group_id`, `editable_title`, `editable_table`) VALUES
(1, 1, '教学工作', 'teaching_work'),
(2, 2, '学院招生', 'enroll_student'),
(3, 3, '学院风采', 'institute_show');

-- --------------------------------------------------------

--
-- 表的结构 `robot_enroll_student`
--

CREATE TABLE IF NOT EXISTS `robot_enroll_student` (
  `group_id` int(5) NOT NULL DEFAULT '2',
  `catalog_id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog` varchar(50) COLLATE utf8_bin NOT NULL,
  `catalog_table` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`catalog_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学院招生' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `robot_enroll_student`
--

INSERT INTO `robot_enroll_student` (`group_id`, `catalog_id`, `catalog`, `catalog_table`) VALUES
(2, 1, '招生要求', 'EnrollStudentStandard'),
(2, 2, '招生信息', 'EnrollStudentInformation');

-- --------------------------------------------------------

--
-- 表的结构 `robot_enroll_student_information`
--

CREATE TABLE IF NOT EXISTS `robot_enroll_student_information` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(2) NOT NULL DEFAULT '2',
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `user_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学院招生——招生信息' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `robot_enroll_student_information`
--

INSERT INTO `robot_enroll_student_information` (`id`, `catalog_id`, `title`, `content`, `user_type`, `user_name`, `date`) VALUES
(5, 2, '机器人学院2016级招生宣讲', '<p><!--[if gte mso 9]><xml>\n <w:WordDocument>\n  <w:View>Normal</w:View>\n  <w:Zoom>0</w:Zoom>\n  <w:TrackMoves/>\n  <w:TrackFormatting/>\n  <w:PunctuationKerning/>\n  <w:DrawingGridVerticalSpacing>7.8 磅</w:DrawingGridVerticalSpacing>\n  <w:DisplayHorizontalDrawingGridEvery>0</w:DisplayHorizontalDrawingGridEvery>\n  <w:DisplayVerticalDrawingGridEvery>2</w:DisplayVerticalDrawingGridEvery>\n  <w:ValidateAgainstSchemas/>\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\n  <w:DoNotPromoteQF/>\n  <w:LidThemeOther>EN-US</w:LidThemeOther>\n  <w:LidThemeAsian>ZH-CN</w:LidThemeAsian>\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\n  <w:Compatibility>\n   <w:SpaceForUL/>\n   <w:BalanceSingleByteDoubleByteWidth/>\n   <w:DoNotLeaveBackslashAlone/>\n   <w:ULTrailSpace/>\n   <w:DoNotExpandShiftReturn/>\n   <w:AdjustLineHeightInTable/>\n   <w:BreakWrappedTables/>\n   <w:SnapToGridInCell/>\n   <w:WrapTextWithPunct/>\n   <w:UseAsianBreakRules/>\n   <w:DontGrowAutofit/>\n   <w:SplitPgBreakAndParaMark/>\n   <w:EnableOpenTypeKerning/>\n   <w:DontFlipMirrorIndents/>\n   <w:OverrideTableStyleHps/>\n   <w:UseFELayout/>\n  </w:Compatibility>\n  <w:DoNotOptimizeForBrowser/>\n  <m:mathPr>\n   <m:mathFont m:val="Cambria Math"/>\n   <m:brkBin m:val="before"/>\n   <m:brkBinSub m:val="&#45;-"/>\n   <m:smallFrac m:val="off"/>\n   <m:dispDef/>\n   <m:lMargin m:val="0"/>\n   <m:rMargin m:val="0"/>\n   <m:defJc m:val="centerGroup"/>\n   <m:wrapIndent m:val="1440"/>\n   <m:intLim m:val="subSup"/>\n   <m:naryLim m:val="undOvr"/>\n  </m:mathPr></w:WordDocument>\n</xml><![endif]--><!--[if gte mso 9]><xml>\n <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"\n  DefSemiHidden="false" DefQFormat="false" DefPriority="99"\n  LatentStyleCount="371">\n  <w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>\n  <w:LsdException Locked="false" Priority="9" SemiHidden="true"\n   UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>\n  <w:LsdException Locked="false" Priority="9" SemiHidden="true"\n   UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>\n  <w:LsdException Locked="false" Priority="9" SemiHidden="true"\n   UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>\n  <w:LsdException Locked="false" Priority="9" SemiHidden="true"\n   UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>\n  <w:LsdException Locked="false" Priority="9" SemiHidden="true"\n   UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>\n  <w:LsdException Locked="false" Priority="9" SemiHidden="true"\n   UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>\n  <w:LsdException Locked="false" Priority="9" SemiHidden="true"\n   UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>\n  <w:LsdException Locked="false" Priority="9" SemiHidden="true"\n   UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="index 1"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="index 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="index 3"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="index 4"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="index 5"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="index 6"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="index 7"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="index 8"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="index 9"/>\n  <w:LsdException Locked="false" Priority="39" SemiHidden="true"\n   UnhideWhenUsed="true" Name="toc 1"/>\n  <w:LsdException Locked="false" Priority="39" SemiHidden="true"\n   UnhideWhenUsed="true" Name="toc 2"/>\n  <w:LsdException Locked="false" Priority="39" SemiHidden="true"\n   UnhideWhenUsed="true" Name="toc 3"/>\n  <w:LsdException Locked="false" Priority="39" SemiHidden="true"\n   UnhideWhenUsed="true" Name="toc 4"/>\n  <w:LsdException Locked="false" Priority="39" SemiHidden="true"\n   UnhideWhenUsed="true" Name="toc 5"/>\n  <w:LsdException Locked="false" Priority="39" SemiHidden="true"\n   UnhideWhenUsed="true" Name="toc 6"/>\n  <w:LsdException Locked="false" Priority="39" SemiHidden="true"\n   UnhideWhenUsed="true" Name="toc 7"/>\n  <w:LsdException Locked="false" Priority="39" SemiHidden="true"\n   UnhideWhenUsed="true" Name="toc 8"/>\n  <w:LsdException Locked="false" Priority="39" SemiHidden="true"\n   UnhideWhenUsed="true" Name="toc 9"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Normal Indent"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="footnote text"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="annotation text"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="header"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="footer"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="index heading"/>\n  <w:LsdException Locked="false" Priority="35" SemiHidden="true"\n   UnhideWhenUsed="true" QFormat="true" Name="caption"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="table of figures"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="envelope address"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="envelope return"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="footnote reference"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="annotation reference"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="line number"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="page number"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="endnote reference"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="endnote text"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="table of authorities"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="macro"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="toa heading"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List Bullet"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List Number"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List 3"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List 4"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List 5"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List Bullet 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List Bullet 3"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List Bullet 4"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List Bullet 5"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List Number 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List Number 3"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List Number 4"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List Number 5"/>\n  <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Closing"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Signature"/>\n  <w:LsdException Locked="false" Priority="1" SemiHidden="true"\n   UnhideWhenUsed="true" Name="Default Paragraph Font"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Body Text"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Body Text Indent"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List Continue"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List Continue 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List Continue 3"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List Continue 4"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="List Continue 5"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Message Header"/>\n  <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Salutation"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Date"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Body Text First Indent"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Body Text First Indent 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Note Heading"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Body Text 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Body Text 3"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Body Text Indent 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Body Text Indent 3"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Block Text"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Hyperlink"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="FollowedHyperlink"/>\n  <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>\n  <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Document Map"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Plain Text"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="E-mail Signature"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="HTML Top of Form"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="HTML Bottom of Form"/>\n  <w:LsdException Locked="false" Priority="0" SemiHidden="true"\n   UnhideWhenUsed="true" QFormat="true" Name="Normal (Web)"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="HTML Acronym"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="HTML Address"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="HTML Cite"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="HTML Code"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="HTML Definition"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="HTML Keyboard"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="HTML Preformatted"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="HTML Sample"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="HTML Typewriter"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="HTML Variable"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Normal Table"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="annotation subject"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="No List"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Outline List 1"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Outline List 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Outline List 3"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Simple 1"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Simple 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Simple 3"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Classic 1"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Classic 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Classic 3"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Classic 4"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Colorful 1"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Colorful 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Colorful 3"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Columns 1"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Columns 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Columns 3"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Columns 4"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Columns 5"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Grid 1"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Grid 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Grid 3"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Grid 4"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Grid 5"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Grid 6"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Grid 7"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Grid 8"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table List 1"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table List 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table List 3"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table List 4"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table List 5"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table List 6"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table List 7"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table List 8"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table 3D effects 1"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table 3D effects 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table 3D effects 3"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Contemporary"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Elegant"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Professional"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Subtle 1"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Subtle 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Web 1"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Web 2"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Web 3"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Balloon Text"/>\n  <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>\n  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"\n   Name="Table Theme"/>\n  <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>\n  <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>\n  <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>\n  <w:LsdException Locked="false" Priority="61" Name="Light List"/>\n  <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>\n  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>\n  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>\n  <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>\n  <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>\n  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>\n  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>\n  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>\n  <w:LsdException Locked="false" Priority="70" Name="Dark List"/>\n  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>\n  <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>\n  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>\n  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>\n  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>\n  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>\n  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>\n  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>\n  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>\n  <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>\n  <w:LsdException Locked="false" Priority="34" QFormat="true"\n   Name="List Paragraph"/>\n  <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>\n  <w:LsdException Locked="false" Priority="30" QFormat="true"\n   Name="Intense Quote"/>\n  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>\n  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>\n  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>\n  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>\n  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>\n  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>\n  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>\n  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>\n  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>\n  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>\n  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>\n  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>\n  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>\n  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>\n  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>\n  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>\n  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>\n  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>\n  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>\n  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>\n  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>\n  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>\n  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>\n  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>\n  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>\n  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>\n  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>\n  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>\n  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>\n  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>\n  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>\n  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>\n  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>\n  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>\n  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>\n  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>\n  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>\n  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>\n  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>\n  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>\n  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>\n  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>\n  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>\n  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>\n  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>\n  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>\n  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>\n  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>\n  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>\n  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>\n  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>\n  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>\n  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>\n  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>\n  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>\n  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>\n  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>\n  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>\n  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>\n  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>\n  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>\n  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>\n  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>\n  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>\n  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>\n  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>\n  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>\n  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>\n  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>\n  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>\n  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>\n  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>\n  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>\n  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>\n  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>\n  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>\n  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>\n  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>\n  <w:LsdException Locked="false" Priority="19" QFormat="true"\n   Name="Subtle Emphasis"/>\n  <w:LsdException Locked="false" Priority="21" QFormat="true"\n   Name="Intense Emphasis"/>\n  <w:LsdException Locked="false" Priority="31" QFormat="true"\n   Name="Subtle Reference"/>\n  <w:LsdException Locked="false" Priority="32" QFormat="true"\n   Name="Intense Reference"/>\n  <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>\n  <w:LsdException Locked="false" Priority="37" SemiHidden="true"\n   UnhideWhenUsed="true" Name="Bibliography"/>\n  <w:LsdException Locked="false" Priority="39" SemiHidden="true"\n   UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>\n  <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>\n  <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>\n  <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>\n  <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>\n  <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>\n  <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>\n  <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>\n  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>\n  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>\n  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>\n  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>\n  <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>\n  <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>\n  <w:LsdException Locked="false" Priority="46"\n   Name="Grid Table 1 Light Accent 1"/>\n  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>\n  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>\n  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>\n  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>\n  <w:LsdException Locked="false" Priority="51"\n   Name="Grid Table 6 Colorful Accent 1"/>\n  <w:LsdException Locked="false" Priority="52"\n   Name="Grid Table 7 Colorful Accent 1"/>\n  <w:LsdException Locked="false" Priority="46"\n   Name="Grid Table 1 Light Accent 2"/>\n  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>\n  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>\n  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>\n  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>\n  <w:LsdException Locked="false" Priority="51"\n   Name="Grid Table 6 Colorful Accent 2"/>\n  <w:LsdException Locked="false" Priority="52"\n   Name="Grid Table 7 Colorful Accent 2"/>\n  <w:LsdException Locked="false" Priority="46"\n   Name="Grid Table 1 Light Accent 3"/>\n  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>\n  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>\n  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>\n  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>\n  <w:LsdException Locked="false" Priority="51"\n   Name="Grid Table 6 Colorful Accent 3"/>\n  <w:LsdException Locked="false" Priority="52"\n   Name="Grid Table 7 Colorful Accent 3"/>\n  <w:LsdException Locked="false" Priority="46"\n   Name="Grid Table 1 Light Accent 4"/>\n  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>\n  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>\n  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>\n  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>\n  <w:LsdException Locked="false" Priority="51"\n   Name="Grid Table 6 Colorful Accent 4"/>\n  <w:LsdException Locked="false" Priority="52"\n   Name="Grid Table 7 Colorful Accent 4"/>\n  <w:LsdException Locked="false" Priority="46"\n   Name="Grid Table 1 Light Accent 5"/>\n  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>\n  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>\n  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>\n  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>\n  <w:LsdException Locked="false" Priority="51"\n   Name="Grid Table 6 Colorful Accent 5"/>\n  <w:LsdException Locked="false" Priority="52"\n   Name="Grid Table 7 Colorful Accent 5"/>\n  <w:LsdException Locked="false" Priority="46"\n   Name="Grid Table 1 Light Accent 6"/>\n  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>\n  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>\n  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>\n  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>\n  <w:LsdException Locked="false" Priority="51"\n   Name="Grid Table 6 Colorful Accent 6"/>\n  <w:LsdException Locked="false" Priority="52"\n   Name="Grid Table 7 Colorful Accent 6"/>\n  <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>\n  <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>\n  <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>\n  <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>\n  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>\n  <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>\n  <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>\n  <w:LsdException Locked="false" Priority="46"\n   Name="List Table 1 Light Accent 1"/>\n  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>\n  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>\n  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>\n  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>\n  <w:LsdException Locked="false" Priority="51"\n   Name="List Table 6 Colorful Accent 1"/>\n  <w:LsdException Locked="false" Priority="52"\n   Name="List Table 7 Colorful Accent 1"/>\n  <w:LsdException Locked="false" Priority="46"\n   Name="List Table 1 Light Accent 2"/>\n  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>\n  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>\n  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>\n  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>\n  <w:LsdException Locked="false" Priority="51"\n   Name="List Table 6 Colorful Accent 2"/>\n  <w:LsdException Locked="false" Priority="52"\n   Name="List Table 7 Colorful Accent 2"/>\n  <w:LsdException Locked="false" Priority="46"\n   Name="List Table 1 Light Accent 3"/>\n  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>\n  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>\n  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>\n  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>\n  <w:LsdException Locked="false" Priority="51"\n   Name="List Table 6 Colorful Accent 3"/>\n  <w:LsdException Locked="false" Priority="52"\n   Name="List Table 7 Colorful Accent 3"/>\n  <w:LsdException Locked="false" Priority="46"\n   Name="List Table 1 Light Accent 4"/>\n  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>\n  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>\n  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>\n  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>\n  <w:LsdException Locked="false" Priority="51"\n   Name="List Table 6 Colorful Accent 4"/>\n  <w:LsdException Locked="false" Priority="52"\n   Name="List Table 7 Colorful Accent 4"/>\n  <w:LsdException Locked="false" Priority="46"\n   Name="List Table 1 Light Accent 5"/>\n  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>\n  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>\n  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>\n  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>\n  <w:LsdException Locked="false" Priority="51"\n   Name="List Table 6 Colorful Accent 5"/>\n  <w:LsdException Locked="false" Priority="52"\n   Name="List Table 7 Colorful Accent 5"/>\n  <w:LsdException Locked="false" Priority="46"\n   Name="List Table 1 Light Accent 6"/>\n  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>\n  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>\n  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>\n  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>\n  <w:LsdException Locked="false" Priority="51"\n   Name="List Table 6 Colorful Accent 6"/>\n  <w:LsdException Locked="false" Priority="52"\n   Name="List Table 7 Colorful Accent 6"/>\n </w:LatentStyles>\n</xml><![endif]--><!--[if gte mso 10]>\n<style>\n /* Style Definitions */\n table.MsoNormalTable\n	{mso-style-name:普通表格;\n	mso-tstyle-rowband-size:0;\n	mso-tstyle-colband-size:0;\n	mso-style-noshow:yes;\n	mso-style-priority:99;\n	mso-style-parent:"";\n	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;\n	mso-para-margin:0cm;\n	mso-para-margin-bottom:.0001pt;\n	mso-pagination:widow-orphan;\n	font-size:10.0pt;\n	font-family:"Calibri","sans-serif";\n	mso-ascii-font-family:Calibri;\n	mso-ascii-theme-font:minor-latin;\n	mso-hansi-font-family:Calibri;\n	mso-hansi-theme-font:minor-latin;\n	mso-bidi-font-family:"Times New Roman";\n	mso-bidi-theme-font:minor-bidi;}\n</style>\n<![endif]-->\n\n</p><p class="MsoNormal" style="text-align:center" align="center"><b><span style="font-size:16.0pt;font-family:宋体;mso-ascii-theme-font:major-fareast;\nmso-fareast-theme-font:major-fareast;mso-hansi-theme-font:major-fareast;\nmso-bidi-font-family:宋体;mso-bidi-theme-font:major-fareast">机器人学院<span lang="EN-US">2016</span>级招生宣讲<span lang="EN-US"></span></span></b></p>\n\n<p class="MsoNormal" style="text-align:left;line-height:150%" align="left"><span style="font-size:14.0pt;line-height:150%;font-family:宋体;mso-ascii-theme-font:\nminor-fareast;mso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;\nmso-hansi-theme-font:minor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:\nminor-fareast">宣讲流程：<span lang="EN-US"></span></span></p>\n\n<p class="MsoNormal" style="margin-left:0cm;text-align:left;\ntext-indent:0cm;line-height:150%;mso-list:l0 level1 lfo1" align="left"><span style="font-size:14.0pt;line-height:150%;font-family:宋体;mso-ascii-theme-font:\nminor-fareast;mso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;\nmso-hansi-theme-font:minor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:\nminor-fareast" lang="EN-US"><span style="mso-list:Ignore">1、</span></span><span style="font-size:14.0pt;line-height:150%;font-family:宋体;mso-ascii-theme-font:\nminor-fareast;mso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;\nmso-hansi-theme-font:minor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:\nminor-fareast">东莞理工学院马宏伟副校长发表讲话。<span lang="EN-US"></span></span></p>\n\n<p class="MsoNormal" style="margin-left:0cm;text-align:left;\ntext-indent:0cm;line-height:150%;mso-list:l0 level1 lfo1" align="left"><span style="font-size:14.0pt;line-height:150%;font-family:宋体;mso-ascii-theme-font:\nminor-fareast;mso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;\nmso-hansi-theme-font:minor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:\nminor-fareast" lang="EN-US"><span style="mso-list:Ignore">2、</span></span><span style="font-size:14.0pt;line-height:150%;font-family:宋体;mso-ascii-theme-font:\nminor-fareast;mso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;\nmso-hansi-theme-font:minor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:\nminor-fareast">国际机器人基地张延亮博士发表讲话。<span lang="EN-US"></span></span></p>\n\n<p class="MsoNormal" style="margin-left:0cm;text-align:left;\ntext-indent:0cm;line-height:150%;mso-list:l0 level1 lfo1" align="left"><span style="font-size:14.0pt;line-height:150%;font-family:宋体;mso-ascii-theme-font:\nminor-fareast;mso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;\nmso-hansi-theme-font:minor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:\nminor-fareast" lang="EN-US"><span style="mso-list:Ignore">3、</span></span><span style="font-size:14.0pt;line-height:150%;font-family:宋体;mso-ascii-theme-font:\nminor-fareast;mso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;\nmso-hansi-theme-font:minor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:\nminor-fareast">东莞理工学院机器人学院胡耀华院长发表讲话，介绍招生要求。<span lang="EN-US"></span></span></p>\n\n<p class="MsoNormal" style="margin-left:0cm;text-align:left;\ntext-indent:0cm;line-height:150%;mso-list:l0 level1 lfo1" align="left"><span style="font-size:14.0pt;line-height:150%;font-family:宋体;mso-ascii-theme-font:\nminor-fareast;mso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;\nmso-hansi-theme-font:minor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:\nminor-fareast" lang="EN-US"><span style="mso-list:Ignore">4、</span></span><span style="font-size:14.0pt;line-height:150%;font-family:宋体;mso-ascii-theme-font:\nminor-fareast;mso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;\nmso-hansi-theme-font:minor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:\nminor-fareast">学生自由提问。<span lang="EN-US"></span></span></p>\n\n<p class="MsoNormal" style="text-align:left" align="left"><span style="font-size:14.0pt;font-family:宋体;mso-ascii-theme-font:minor-fareast;\nmso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:\nminor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:minor-fareast" lang="EN-US">&nbsp;</span></p>\n\n<p class="MsoNormal"><b><span style="font-size:15.0pt;font-family:宋体;mso-ascii-font-family:\n&quot;Times New Roman&quot;;mso-hansi-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:\n&quot;Times New Roman&quot;;color:black;mso-themecolor:text1">一、机器人学院成立背景</span></b><b><span style="font-size:15.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;\nmso-fareast-font-family:宋体;color:black;mso-themecolor:text1" lang="EN-US"></span></b></p>\n\n<p class="MsoNormal" style="margin-bottom:7.5pt;text-align:left;\ntext-indent:28.0pt;mso-char-indent-count:2.0;mso-line-height-alt:12.0pt;\nmso-pagination:widow-orphan;background:white" align="left"><span style="font-size:14.0pt;\nfont-family:宋体;mso-ascii-font-family:&quot;Times New Roman&quot;;mso-hansi-font-family:\n&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;color:black;\nmso-themecolor:text1">机器人学院是我校在国际“工业</span><span style="font-size:\n14.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:宋体;\ncolor:black;mso-themecolor:text1" lang="EN-US">4.0</span><span style="font-size:14.0pt;\nfont-family:宋体;mso-ascii-font-family:&quot;Times New Roman&quot;;mso-hansi-font-family:\n&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;color:black;\nmso-themecolor:text1">”、“中国制造</span><span style="font-size:14.0pt;\nfont-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:宋体;color:black;\nmso-themecolor:text1" lang="EN-US">2025</span><span style="font-size:14.0pt;font-family:\n宋体;mso-ascii-font-family:&quot;Times New Roman&quot;;mso-hansi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-font-family:&quot;Times New Roman&quot;;color:black;mso-themecolor:text1">”、广东省“创新发展战略”、“东莞制造</span><span style="font-size:14.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;\nmso-fareast-font-family:宋体;color:black;mso-themecolor:text1" lang="EN-US">2025</span><span style="font-size:14.0pt;font-family:宋体;mso-ascii-font-family:&quot;Times New Roman&quot;;\nmso-hansi-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\ncolor:black;mso-themecolor:text1">”等政策背景下，顺应智能制造对机器人高级应用人才的需求，与东莞松山湖国际机器人产业基地、香港科技大学联合创办的特色产业学院。</span><span style="font-size:14.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;\nmso-fareast-font-family:宋体;color:black;mso-themecolor:text1" lang="EN-US"></span></p>\n\n<p class="MsoNormal" style="margin-bottom:7.5pt;text-align:left;\ntext-indent:21.0pt;mso-line-height-alt:12.0pt;mso-pagination:widow-orphan;\nbackground:white" align="left"><span style="font-size:14.0pt;font-family:宋体;mso-ascii-font-family:\n&quot;Times New Roman&quot;;mso-hansi-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:\n&quot;Times New Roman&quot;;color:black;mso-themecolor:text1">学院采用全新教学模式，培养机器人、智能装备及其现代制造服务业需要的产业工程师、技术管理及经营管理专门人才，帮助生成长为卓越工程师、创业明星、行业精英和产业领军人才。</span><span style="font-size:14.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;\nmso-fareast-font-family:宋体;color:black;mso-themecolor:text1" lang="EN-US"></span></p>\n\n<p class="MsoNormal"><b><span style="font-size:15.0pt;font-family:宋体;mso-ascii-font-family:\n&quot;Times New Roman&quot;;mso-hansi-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:\n&quot;Times New Roman&quot;;color:black;mso-themecolor:text1">二、机器人学院的培养优势与特色</span></b><b><span style="font-size:15.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;\nmso-fareast-font-family:宋体;color:black;mso-themecolor:text1" lang="EN-US"></span></b></p>\n\n<p class="MsoNormal" style="margin-bottom:7.5pt;text-align:left;\ntext-indent:28.1pt;mso-char-indent-count:2.0;mso-line-height-alt:12.0pt;\nmso-pagination:widow-orphan;background:white" align="left"><b><span style="font-size:14.0pt;font-family:宋体;mso-ascii-theme-font:minor-fareast;\nmso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:\nminor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:minor-fareast;\ncolor:black;mso-themecolor:text1" lang="EN-US">1</span></b><b><span style="font-size:14.0pt;\nfont-family:宋体;mso-ascii-theme-font:minor-fareast;mso-fareast-font-family:宋体;\nmso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-fareast;\nmso-bidi-font-family:宋体;mso-bidi-theme-font:minor-fareast;color:black;\nmso-themecolor:text1">、跨专业融合教育<span lang="EN-US"></span></span></b></p>\n\n<p class="MsoNormal" style="margin-bottom:7.5pt;text-align:left;\ntext-indent:21.0pt;mso-line-height-alt:12.0pt;mso-pagination:widow-orphan;\nbackground:white" align="left"><span style="font-size:14.0pt;font-family:宋体;mso-ascii-font-family:\n&quot;Times New Roman&quot;;mso-hansi-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:\n&quot;Times New Roman&quot;;color:black;mso-themecolor:text1">机器人学院的学生来自机械设计及自动化、自动化、电子信息工程、软件工程等专业，学生既要学习其原专业的基础知识，也学习机器人方面的公共课程。在各种机器人实践项目中，学生组成跨专业团队，共同学习、交流、合作，培养其综合能力。</span><b style="mso-bidi-font-weight:normal"><span style="font-size:14.0pt;font-family:\n宋体;mso-ascii-font-family:Arial;mso-hansi-font-family:Arial;mso-bidi-font-family:\nArial;color:black;mso-themecolor:text1;background:white;mso-font-kerning:0pt;\nmso-bidi-language:AR">毕业后，学生授原专业的毕业证和学位证。</span></b><b style="mso-bidi-font-weight:\nnormal"><span style="font-size:14.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;\nmso-fareast-font-family:宋体;color:black;mso-themecolor:text1;background:white;\nmso-font-kerning:0pt;mso-bidi-language:AR" lang="EN-US"></span></b></p>\n\n<p style="margin-top:5.0pt;margin-right:5.3pt;margin-bottom:0cm;margin-left:\n28.0pt;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;\nmso-line-height-alt:.75pt;mso-pagination:widow-orphan"><b><span style="font-size:14.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:\n宋体;color:black;mso-themecolor:text1;background:white;mso-bidi-language:AR" lang="EN-US">2</span></b><b><span style="font-size:14.0pt;font-family:宋体;mso-ascii-font-family:Arial;mso-hansi-font-family:\nArial;mso-bidi-font-family:Arial;color:black;mso-themecolor:text1;background:\nwhite;mso-bidi-language:AR">、全新教学模式：以项目为引导、以能力为导向的探究型教学</span></b><b><span style="font-size:14.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:\n宋体;color:black;mso-themecolor:text1;background:white;mso-bidi-language:AR" lang="EN-US"></span></b></p>\n\n<p class="MsoNormal" style="margin-bottom:7.5pt;text-align:left;\ntext-indent:21.0pt;mso-line-height-alt:12.0pt;mso-pagination:widow-orphan;\nbackground:white" align="left"><span style="font-size:14.0pt;font-family:宋体;mso-ascii-font-family:\nArial;mso-hansi-font-family:Arial;mso-bidi-font-family:Arial;color:black;\nmso-themecolor:text1;background:white;mso-bidi-language:AR">借鉴香港的教学模式，学生通过理论课程、实验及项目设计等环节，了解机器人的基本知识和原理；通过每学期都开设的机器人综合实训项目或</span><span style="font-size:14.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:\n宋体;color:black;mso-themecolor:text1;background:white;mso-bidi-language:AR" lang="EN-US">RoboCon</span><span style="font-size:14.0pt;font-family:宋体;mso-ascii-font-family:Arial;mso-hansi-font-family:\nArial;mso-bidi-font-family:Arial;color:black;mso-themecolor:text1;background:\nwhite;mso-bidi-language:AR">机器人大赛，逐步培养学生的设计能力、自主学习、团队合作、竞争意识等能力。</span><span style="font-size:14.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:\n宋体;color:black;mso-themecolor:text1;background:white;mso-bidi-language:AR" lang="EN-US"></span></p>\n\n<p style="margin-top:5.0pt;margin-right:5.3pt;margin-bottom:0cm;margin-left:\n28.0pt;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;\nmso-line-height-alt:.75pt;mso-pagination:widow-orphan"><b><span style="font-size:14.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:\n宋体;color:black;mso-themecolor:text1;background:white;mso-bidi-language:AR" lang="EN-US">3</span></b><b><span style="font-size:14.0pt;font-family:宋体;mso-ascii-font-family:Arial;mso-hansi-font-family:\nArial;mso-bidi-font-family:Arial;color:black;mso-themecolor:text1;background:\nwhite;mso-bidi-language:AR">、创新创业教育</span></b><span style="font-size:14.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:\n宋体;color:black;mso-themecolor:text1;background:white;mso-bidi-language:AR" lang="EN-US"></span></p>\n\n<p class="MsoNormal" style="margin-bottom:7.5pt;text-align:left;\ntext-indent:21.0pt;mso-line-height-alt:12.0pt;mso-pagination:widow-orphan;\nbackground:white" align="left"><span style="font-size:14.0pt;font-family:宋体;mso-ascii-font-family:\nArial;mso-hansi-font-family:Arial;mso-bidi-font-family:Arial;color:black;\nmso-themecolor:text1;background:white;mso-bidi-language:AR">机器人学院通过多种形式开展创新创业教育，例如</span><span style="font-size:14.0pt;font-family:宋体;mso-ascii-font-family:&quot;Times New Roman&quot;;\nmso-hansi-font-family:&quot;Times New Roman&quot;;color:black;mso-themecolor:text1">组织学生实地参观松山湖机器人产业基地和东莞制造企业，假期到东莞的高新企业实训实习，了解加工机床的每一道工序与各个零部件的组成、安装、调试等；邀请来自不同领域的创业成功的企业家与同学们分享了成长经历和成功经验，实地感受和了解创业团队和企业的发展历程。尤其是经常有机会近距离聆听著名机器人专家、大疆无人机汪涛的导师李泽湘教授的教诲。</span><span style="font-size:14.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;\nmso-fareast-font-family:宋体;color:black;mso-themecolor:text1" lang="EN-US"></span></p>\n\n<p class="MsoNormal" style="margin-bottom:7.5pt;text-align:left;\ntext-indent:28.1pt;mso-char-indent-count:2.0;mso-line-height-alt:12.0pt;\nmso-pagination:widow-orphan;tab-stops:21.0pt;background:white" align="left"><b><span style="font-size:14.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:\n宋体;color:black;mso-themecolor:text1;background:white;mso-font-kerning:0pt;\nmso-bidi-language:AR" lang="EN-US">4</span></b><b><span style="font-size:14.0pt;font-family:\n宋体;mso-ascii-font-family:Arial;mso-hansi-font-family:Arial;mso-bidi-font-family:\nArial;color:black;mso-themecolor:text1;background:white;mso-font-kerning:0pt;\nmso-bidi-language:AR">、与国际接轨的“思维碰撞”计划。</span></b><b><span style="font-size:14.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:\n宋体;color:black;mso-themecolor:text1;background:white;mso-font-kerning:0pt;\nmso-bidi-language:AR" lang="EN-US"></span></b></p>\n\n<p style="margin-top:5.0pt;margin-right:5.3pt;margin-bottom:0cm;margin-left:\n0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;\ntext-indent:28.0pt;mso-char-indent-count:2.0;line-height:150%;mso-pagination:\nwidow-orphan"><span style="font-size:14.0pt;line-height:150%;font-family:宋体;\nmso-ascii-font-family:&quot;Times New Roman&quot;;mso-hansi-font-family:&quot;Times New Roman&quot;;\ncolor:black;mso-themecolor:text1">机器人学院每年都会组织部分学生参加上海、深圳等地的机器人与智能装备专业展会和论坛，选派学生去国外参观、比赛、交流，让学生增加国际视野，产生思维碰撞。<span style="mso-bidi-font-weight:bold">学生在校四年的学习期间会有机会出国开拓视野。</span></span><span style="font-size:14.0pt;line-height:150%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;\nmso-fareast-font-family:宋体;color:black;mso-themecolor:text1;background:white;\nmso-bidi-language:AR" lang="EN-US"></span></p>\n\n<p class="MsoNormal" style="margin-bottom:7.5pt;text-align:left;\ntext-indent:28.1pt;mso-char-indent-count:2.0;line-height:150%;mso-pagination:\nwidow-orphan;tab-stops:21.0pt;background:white" align="left"><b><span style="font-size:14.0pt;line-height:150%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;\nmso-fareast-font-family:宋体;color:black;mso-themecolor:text1;background:white;\nmso-font-kerning:0pt;mso-bidi-language:AR" lang="EN-US">5</span></b><b><span style="font-size:14.0pt;line-height:150%;font-family:宋体;mso-ascii-font-family:\nArial;mso-hansi-font-family:Arial;mso-bidi-font-family:Arial;color:black;\nmso-themecolor:text1;background:white;mso-font-kerning:0pt;mso-bidi-language:\nAR">、</span></b><b><span style="font-size:14.0pt;line-height:150%;\nfont-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:宋体;color:black;\nmso-themecolor:text1;background:white;mso-font-kerning:0pt;mso-bidi-language:\nAR" lang="EN-US">2+2</span></b><b><span style="font-size:14.0pt;line-height:150%;font-family:\n宋体;mso-ascii-font-family:Arial;mso-hansi-font-family:Arial;mso-bidi-font-family:\nArial;color:black;mso-themecolor:text1;background:white;mso-font-kerning:0pt;\nmso-bidi-language:AR">产教融合、校企协同育人</span></b><span style="font-size:\n14.0pt;line-height:150%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:\n宋体;color:black;mso-themecolor:text1;background:white;mso-font-kerning:0pt;\nmso-bidi-language:AR" lang="EN-US"></span></p>\n\n<p class="MsoNormal" style="margin-bottom:7.5pt;text-align:left;\ntext-indent:28.0pt;mso-char-indent-count:2.0;mso-line-height-alt:12.0pt;\nmso-pagination:widow-orphan;tab-stops:21.0pt;background:white" align="left"><span style="font-size:14.0pt;font-family:宋体;mso-ascii-font-family:Arial;mso-hansi-font-family:\nArial;mso-bidi-font-family:Arial;color:black;mso-themecolor:text1;background:\nwhite;mso-font-kerning:0pt;mso-bidi-language:AR">机器人学院与东莞松山湖国际机器人产业基地、香港科技大学联合共建，采用</span><span style="font-size:14.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:\n宋体;color:black;mso-themecolor:text1;background:white;mso-font-kerning:0pt;\nmso-bidi-language:AR" lang="EN-US">2+2</span><span style="font-size:14.0pt;font-family:宋体;\nmso-ascii-font-family:Arial;mso-hansi-font-family:Arial;mso-bidi-font-family:\nArial;color:black;mso-themecolor:text1;background:white;mso-font-kerning:0pt;\nmso-bidi-language:AR">的培养模式。前</span><span style="font-size:14.0pt;\nfont-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:宋体;color:black;\nmso-themecolor:text1;background:white;mso-font-kerning:0pt;mso-bidi-language:\nAR" lang="EN-US">2</span><span style="font-size:14.0pt;font-family:宋体;mso-ascii-font-family:\nArial;mso-hansi-font-family:Arial;mso-bidi-font-family:Arial;color:black;\nmso-themecolor:text1;background:white;mso-font-kerning:0pt;mso-bidi-language:\nAR">年主要在学校学习，侧重于数学基础、科学基础和专业基础的学习和工程能力的培养；后</span><span style="font-size:14.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:\n宋体;color:black;mso-themecolor:text1;background:white;mso-font-kerning:0pt;\nmso-bidi-language:AR" lang="EN-US">2</span><span style="font-size:14.0pt;font-family:宋体;\nmso-ascii-font-family:Arial;mso-hansi-font-family:Arial;mso-bidi-font-family:\nArial;color:black;mso-themecolor:text1;background:white;mso-font-kerning:0pt;\nmso-bidi-language:AR">年主要在东莞松山湖国际机器人产业化基地培养，依托香港科技大学的师资力量、产业界高端人才与基地产业化能力，与机器人企业深度融合，侧重于各专业与机器人紧密联系的领域课程学习以及跨专业的实际开发项目训练，并接受面向产业的金融课程、创业课程学习和训练，完成毕业设计。</span><b style="mso-bidi-font-weight:normal"><span style="font-size:14.0pt;\nfont-family:宋体;mso-ascii-theme-font:minor-fareast;mso-fareast-font-family:宋体;\nmso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-fareast;\nmso-bidi-font-family:宋体;mso-bidi-theme-font:minor-fareast;color:black;\nmso-themecolor:text1" lang="EN-US"></span></b></p>\n\n<p class="Style1" style="margin-left:0cm;text-indent:28.1pt"><b style="mso-bidi-font-weight:\nnormal"><span style="font-size:14.0pt;line-height:150%;font-family:\n宋体;mso-ascii-theme-font:minor-fareast;mso-fareast-font-family:宋体;mso-fareast-theme-font:\nminor-fareast;mso-hansi-theme-font:minor-fareast;mso-bidi-font-family:宋体;\nmso-bidi-theme-font:minor-fareast;color:black;mso-themecolor:text1" lang="EN-US">6</span></b><b style="mso-bidi-font-weight:normal"><span style="font-size:14.0pt;line-height:\n150%;font-family:宋体;mso-ascii-theme-font:minor-fareast;mso-fareast-font-family:\n宋体;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-fareast;\nmso-bidi-font-family:宋体;mso-bidi-theme-font:minor-fareast;color:black;\nmso-themecolor:text1">、高水平师资<span lang="EN-US"></span></span></b></p>\n\n<p class="Style1" style="margin-left:0cm;text-indent:28.0pt"><span style="font-size:14.0pt;line-height:150%;font-family:宋体;mso-ascii-theme-font:\nminor-fareast;mso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;\nmso-hansi-theme-font:minor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:\nminor-fareast;color:black;mso-themecolor:text1;mso-bidi-font-weight:bold">机器人学院的师资来源：（<span lang="EN-US">1</span></span><span style="font-size:14.0pt;line-height:150%;\nfont-family:宋体;mso-ascii-theme-font:minor-fareast;mso-fareast-font-family:宋体;\nmso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-fareast;\nmso-bidi-font-family:宋体;mso-bidi-theme-font:minor-fareast;color:black;\nmso-themecolor:text1">）东莞理工学院各专业的知名教授和教师；（<span lang="EN-US">2</span>）机器人学院聘请的台湾师资；（<span lang="EN-US">3</span>）香港科技大学机器人研究所国际知名教授团队；（<span lang="EN-US">4</span>）松山湖国际机器人产业基地及知名企业的工程师、行业企业精英；（<span lang="EN-US">5</span>）国际国内创业及金融投资企业、金融投资成功人士组成的一流师资队伍。教师具有一流水准、国际视野、产业特色、创业阅历的特点。<span lang="EN-US"></span></span></p>\n\n<p class="MsoNormal" style="margin-left:28.1pt;line-height:150%"><b style="mso-bidi-font-weight:normal"><span style="font-size:14.0pt;\nline-height:150%;font-family:宋体;mso-ascii-theme-font:minor-fareast;mso-fareast-font-family:\n宋体;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-fareast;\nmso-bidi-font-family:宋体;mso-bidi-theme-font:minor-fareast;color:black;\nmso-themecolor:text1" lang="EN-US">7</span></b><b style="mso-bidi-font-weight:normal"><span style="font-size:14.0pt;line-height:150%;font-family:宋体;mso-ascii-theme-font:\nminor-fareast;mso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;\nmso-hansi-theme-font:minor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:\nminor-fareast;color:black;mso-themecolor:text1">、学习资源支持<span lang="EN-US"></span></span></b></p>\n\n<p class="MsoNormal" style="text-indent:28.1pt;mso-char-indent-count:2.0;\nline-height:150%"><b><span style="font-size:14.0pt;line-height:150%;\nfont-family:宋体;mso-ascii-theme-font:minor-fareast;mso-fareast-font-family:宋体;\nmso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-fareast;\nmso-bidi-font-family:宋体;mso-bidi-theme-font:minor-fareast;color:black;\nmso-themecolor:text1" lang="EN-US">(1) </span></b><b><span style="font-size:14.0pt;\nline-height:150%;font-family:宋体;mso-ascii-theme-font:minor-fareast;mso-fareast-font-family:\n宋体;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-fareast;\nmso-bidi-font-family:宋体;mso-bidi-theme-font:minor-fareast;color:black;\nmso-themecolor:text1">英语教学。</span></b><span style="font-size:14.0pt;\nline-height:150%;font-family:宋体;mso-ascii-theme-font:minor-fareast;mso-fareast-font-family:\n宋体;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-fareast;\nmso-bidi-font-family:宋体;mso-bidi-theme-font:minor-fareast;color:black;\nmso-themecolor:text1" lang="EN-US">2016</span><span style="font-size:14.0pt;line-height:\n150%;font-family:宋体;mso-ascii-theme-font:minor-fareast;mso-fareast-font-family:\n宋体;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-fareast;\nmso-bidi-font-family:宋体;mso-bidi-theme-font:minor-fareast;color:black;\nmso-themecolor:text1">级起，学生的英语教学参照雅思考试的要求进行教学，其中初级和中级由校内教师教学，高级聘请专业机构教学；部分专业课将使用原版教材，由台湾师资采用中文授课。<span lang="EN-US"></span></span></p>\n\n<p class="MsoNormal" style="text-indent:28.1pt;mso-char-indent-count:2.0;\nline-height:150%"><b style="mso-bidi-font-weight:normal"><span style="font-size:14.0pt;line-height:150%;font-family:宋体;mso-ascii-theme-font:\nminor-fareast;mso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;\nmso-hansi-theme-font:minor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:\nminor-fareast;color:black;mso-themecolor:text1" lang="EN-US">(2) </span></b><b style="mso-bidi-font-weight:normal"><span style="font-size:14.0pt;line-height:\n150%;font-family:宋体;mso-ascii-theme-font:minor-fareast;mso-fareast-font-family:\n宋体;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-fareast;\nmso-bidi-font-family:宋体;mso-bidi-theme-font:minor-fareast;color:black;\nmso-themecolor:text1">学习支持。</span></b><span style="font-size:14.0pt;line-height:\n150%;font-family:宋体;mso-ascii-theme-font:minor-fareast;mso-fareast-font-family:\n宋体;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-fareast;\nmso-bidi-font-family:宋体;mso-bidi-theme-font:minor-fareast;color:black;\nmso-themecolor:text1">实行科教结合、校企结合，配备导师，为每一位学生提供在校内和企业阶段的学习和成才道路提供专业的指导。<span lang="EN-US"></span></span></p>\n\n<p class="MsoNormal" style="text-indent:28.1pt;mso-char-indent-count:2.0;\nline-height:150%"><b style="mso-bidi-font-weight:normal"><span style="font-size:14.0pt;line-height:150%;font-family:宋体;mso-ascii-theme-font:\nminor-fareast;mso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;\nmso-hansi-theme-font:minor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:\nminor-fareast;color:black;mso-themecolor:text1" lang="EN-US">(3) </span></b><b style="mso-bidi-font-weight:normal"><span style="font-size:14.0pt;line-height:\n150%;font-family:宋体;mso-ascii-theme-font:minor-fareast;mso-fareast-font-family:\n宋体;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-fareast;\nmso-bidi-font-family:宋体;mso-bidi-theme-font:minor-fareast;color:black;\nmso-themecolor:text1">实践条件。</span></b><span style="font-size:14.0pt;line-height:\n150%;font-family:宋体;mso-ascii-theme-font:minor-fareast;mso-fareast-font-family:\n宋体;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-fareast;\nmso-bidi-font-family:宋体;mso-bidi-theme-font:minor-fareast;color:black;\nmso-themecolor:text1">校内有完善、先进的实验教学平台；校外依托国际机器人产业基地和相关联的企业</span><span style="font-size:14.0pt;line-height:150%;font-family:宋体;mso-ascii-theme-font:\nminor-fareast;mso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;\nmso-hansi-theme-font:minor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:\nminor-fareast;color:black;mso-themecolor:text1;mso-font-kerning:0pt">，满足实践环节的教学要求。</span><span style="font-size:14.0pt;line-height:150%;font-family:宋体;mso-ascii-theme-font:\nminor-fareast;mso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;\nmso-hansi-theme-font:minor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:\nminor-fareast;color:black;mso-themecolor:text1" lang="EN-US"></span></p>\n\n<p class="MsoNormal" style="text-indent:28.1pt;mso-char-indent-count:2.0;\nline-height:150%"><b style="mso-bidi-font-weight:normal"><span style="font-size:14.0pt;line-height:150%;font-family:宋体;mso-ascii-theme-font:\nminor-fareast;mso-fareast-font-family:宋体;mso-fareast-theme-font:minor-fareast;\nmso-hansi-theme-font:minor-fareast;mso-bidi-font-family:宋体;mso-bidi-theme-font:\nminor-fareast;color:black;mso-themecolor:text1" lang="EN-US">(4) </span></b><b style="mso-bidi-font-weight:normal"><span style="font-size:14.0pt;line-height:\n150%;font-family:宋体;mso-ascii-theme-font:minor-fareast;mso-fareast-font-family:\n宋体;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-fareast;\nmso-bidi-font-family:宋体;mso-bidi-theme-font:minor-fareast;color:black;\nmso-themecolor', '系统管理员', 'root', '1523732820');

-- --------------------------------------------------------

--
-- 表的结构 `robot_enroll_student_standard`
--

CREATE TABLE IF NOT EXISTS `robot_enroll_student_standard` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(2) NOT NULL DEFAULT '1',
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `user_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学院招生——招生要求' AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- 表的结构 `robot_index`
--

CREATE TABLE IF NOT EXISTS `robot_index` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `slides_file` varchar(100) COLLATE utf8_bin NOT NULL,
  `slides_title` varchar(50) COLLATE utf8_bin NOT NULL,
  `date` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='首页' AUTO_INCREMENT=46 ;

--
-- 转存表中的数据 `robot_index`
--

INSERT INTO `robot_index` (`id`, `slides_file`, `slides_title`, `date`) VALUES
(45, '/RobotInstitute/Public/images/IndexSlides/96d3f56ba5cab269a1adc1ebd59c5b2e.jpg', '东莞理工学院机器人学院', '1523717906');

-- --------------------------------------------------------

--
-- 表的结构 `robot_institute_album`
--

CREATE TABLE IF NOT EXISTS `robot_institute_album` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `catalog` varchar(50) COLLATE utf8_bin NOT NULL,
  `catalog_table` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学院相册' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `robot_institute_album`
--

INSERT INTO `robot_institute_album` (`id`, `catalog`, `catalog_table`) VALUES
(1, '荣誉榜', 'InstituteHonorAlbum'),
(2, '学院相册', 'InstitutePhotoAlbum');

-- --------------------------------------------------------

--
-- 表的结构 `robot_institute_honor_album`
--

CREATE TABLE IF NOT EXISTS `robot_institute_honor_album` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `album_file` varchar(100) COLLATE utf8_bin NOT NULL,
  `album_description` varchar(100) COLLATE utf8_bin NOT NULL,
  `user_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学院相册——荣誉榜' AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `robot_institute_honor_album`
--

INSERT INTO `robot_institute_honor_album` (`id`, `album_file`, `album_description`, `user_type`, `user_name`, `date`) VALUES
(36, '/RobotInstitute/Public/images/InstituteHonorAlbum/689d8cafe6e76d0f94543e326a3ec6a0.jpg', '2016年国际水中机器人大赛：2D仿真——一等奖', '系统管理员', '陈俊杰', '1523783908'),
(33, '/RobotInstitute/Public/images/InstituteHonorAlbum/2194f534827dc87a1facd369efab1489.jpg', '2016年国际水中机器人大赛：2D仿真——一等奖', '系统管理员', '陈俊杰', '1523783810'),
(34, '/RobotInstitute/Public/images/InstituteHonorAlbum/99223ce382f495891fae6e6baae0a33d.jpg', '2016年国际水中机器人大赛：2D仿真——一等奖', '系统管理员', '陈俊杰', '1523783876'),
(35, '/RobotInstitute/Public/images/InstituteHonorAlbum/405faf56ee2a1ca48a0038bf83c89a4f.jpg', '2016年国际水中机器人大赛：2D仿真——一等奖', '系统管理员', '陈俊杰', '1523783885');

-- --------------------------------------------------------

--
-- 表的结构 `robot_institute_news`
--

CREATE TABLE IF NOT EXISTS `robot_institute_news` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `editable_title` varchar(50) COLLATE utf8_bin NOT NULL,
  `catalog` varchar(50) COLLATE utf8_bin NOT NULL,
  `catalog_url` varchar(100) COLLATE utf8_bin NOT NULL,
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `date` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学院动态' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `robot_institute_overview`
--

CREATE TABLE IF NOT EXISTS `robot_institute_overview` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog` varchar(50) COLLATE utf8_bin NOT NULL,
  `catalog_table` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学院概况' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `robot_institute_overview`
--

INSERT INTO `robot_institute_overview` (`id`, `catalog`, `catalog_table`) VALUES
(1, '学院介绍', 'InstituteOverviewInstituteIntroduction'),
(2, '学院机构', 'InstituteOverviewInstituteGroup');

-- --------------------------------------------------------

--
-- 表的结构 `robot_institute_overview_institute_group`
--

CREATE TABLE IF NOT EXISTS `robot_institute_overview_institute_group` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `user_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学院概况--学院机构' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `robot_institute_overview_institute_group`
--

INSERT INTO `robot_institute_overview_institute_group` (`id`, `title`, `content`, `user_type`, `user_name`, `date`) VALUES
(1, '学院机构', '\n              \n              \n              \n              \n              \n              \n              \n              <ul><li style="text-align: center; "><span style="font-size: 24px; font-family: &quot;Arial Black&quot;;">学院机构</span><br></li><li style="text-align: center;"><font face="Arial Black"><span style="font-size: 24px;">学院<span style="font-family: 微软雅黑;">机构</span></span></font></li><li style="text-align: center;"><font face="Arial Black"><span style="font-size: 24px;"><span style="font-family: 微软雅黑;">学院机构</span></span></font><br></li></ul><p>         </p>                                                                        ', '系统管理员', 'root', '1523786215');

-- --------------------------------------------------------

--
-- 表的结构 `robot_institute_overview_institute_introduction`
--

CREATE TABLE IF NOT EXISTS `robot_institute_overview_institute_introduction` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `user_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学院概况——学院介绍' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `robot_institute_overview_institute_introduction`
--

INSERT INTO `robot_institute_overview_institute_introduction` (`id`, `title`, `content`, `user_type`, `user_name`, `date`) VALUES
(1, '学院介绍', '\n              \n              \n              <p><span style="font-weight: 700;"><span style="font-size: 15pt; font-family: 宋体;">一、机器人学院成立背景</span></span></p><p class="MsoNormal" align="left" style="margin-bottom: 7.5pt; text-indent: 28pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14pt; font-family: 宋体;">机器人学院是我校在国际“工业</span><span lang="EN-US" style="font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;">4.0</span><span style="font-size: 14pt; font-family: 宋体;">”、“中国制造</span><span lang="EN-US" style="font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;">2025</span><span style="font-size: 14pt; font-family: 宋体;">”、广东省“创新发展战略”、“东莞制造</span><span lang="EN-US" style="font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;">2025</span><span style="font-size: 14pt; font-family: 宋体;">”等政策背景下，顺应智能制造对机器人高级应用人才的需求，与东莞松山湖国际机器人产业基地、香港科技大学联合创办的特色产业学院。</span><span lang="EN-US" style="font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" align="left" style="margin-bottom: 7.5pt; text-indent: 21pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14pt; font-family: 宋体;">学院采用全新教学模式，培养机器人、智能装备及其现代制造服务业需要的产业工程师、技术管理及经营管理专门人才，帮助生成长为卓越工程师、创业明星、行业精英和产业领军人才。</span><span lang="EN-US" style="font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" align="left" style="margin-bottom: 7.5pt; text-indent: 21pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span lang="EN-US" style="font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;"><o:p>&nbsp;</o:p></span></p><p class="MsoNormal"><span style="font-weight: 700;"><span style="font-size: 15pt; font-family: 宋体;">二、机器人学院的培养优势与特色</span></span><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 15pt; font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></span></p><p class="MsoNormal" align="left" style="margin-bottom: 7.5pt; text-indent: 28.1pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; font-family: 宋体;">1</span></span><span style="font-weight: 700;"><span style="font-size: 14pt; font-family: 宋体;">、跨专业融合教育<span lang="EN-US"><o:p></o:p></span></span></span></p><p class="MsoNormal" align="left" style="margin-bottom: 7.5pt; text-indent: 21pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14pt; font-family: 宋体;">机器人学院的学生来自机械设计及自动化、自动化、电子信息工程、软件工程等专业，学生既要学习其原专业的基础知识，也学习机器人方面的公共课程。在各种机器人实践项目中，学生组成跨专业团队，共同学习、交流、合作，培养其综合能力。</span><span style="font-weight: 700;"><span style="font-size: 14pt; font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">毕业后，学生授原专业的毕业证和学位证。</span></span><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p></o:p></span></span></p><p class="MsoNormal" align="left" style="margin-bottom: 7.5pt; text-indent: 21pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p>&nbsp;</o:p></span></span></p><p style="margin: 5pt 5.3pt 0.0001pt 28pt; text-align: justify;"><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">2</span></span><span style="font-weight: 700;"><span style="font-size: 14pt; font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">、全新教学模式：以项目为引导、以能力为导向的探究型教学</span></span><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p></o:p></span></span></p><p class="MsoNormal" align="left" style="margin-bottom: 7.5pt; text-indent: 21pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14pt; font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">借鉴香港的教学模式，学生通过理论课程、实验及项目设计等环节，了解机器人的基本知识和原理；通过每学期都开设的机器人综合实训项目或</span><span lang="EN-US" style="font-size: 14pt; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">RoboCon</span><span style="font-size: 14pt; font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">机器人大赛，逐步培养学生的设计能力、自主学习、团队合作、竞争意识等能力。</span><span lang="EN-US" style="font-size: 14pt; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p></o:p></span></p><p class="MsoNormal" align="left" style="margin-bottom: 7.5pt; text-indent: 21pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span lang="EN-US" style="font-size: 14pt; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p>&nbsp;</o:p></span></p><p style="margin: 5pt 5.3pt 0.0001pt 28pt; text-align: justify;"><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">3</span></span><span style="font-weight: 700;"><span style="font-size: 14pt; font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">、创新创业教育</span></span><span lang="EN-US" style="font-size: 14pt; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p></o:p></span></p><p class="MsoNormal" align="left" style="margin-bottom: 7.5pt; text-indent: 21pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14pt; font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">机器人学院通过多种形式开展创新创业教育，例如</span><span style="font-size: 14pt; font-family: 宋体;">组织学生实地参观松山湖机器人产业基地和东莞制造企业，假期到东莞的高新企业实训实习，了解加工机床的每一道工序与各个零部件的组成、安装、调试等；邀请来自不同领域的创业成功的企业家与同学们分享了成长经历和成功经验，实地感受和了解创业团队和企业的发展历程。尤其是经常有机会近距离聆听著名机器人专家、大疆无人机汪涛的导师李泽湘教授的教诲。</span><span lang="EN-US" style="font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" align="left" style="margin-bottom: 7.5pt; text-indent: 21pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span lang="EN-US" style="font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;"><o:p>&nbsp;</o:p></span></p><p class="MsoNormal" align="left" style="margin-bottom: 7.5pt; text-indent: 28.1pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">4</span></span><span style="font-weight: 700;"><span style="font-size: 14pt; font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">、与国际接轨的“思维碰撞”计划。</span></span><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p></o:p></span></span></p><p style="margin: 5pt 5.3pt 0.0001pt 0cm; text-align: justify; text-indent: 28pt; line-height: 21px;"><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">机器人学院每年都会组织部分学生参加上海、深圳等地的机器人与智能装备专业展会和论坛，选派学生去国外参观、比赛、交流，让学生增加国际视野，产生思维碰撞。学生在校四年的学习期间会有机会出国开拓视野。</span></p><p style="margin: 5pt 5.3pt 0.0001pt 0cm; text-align: justify; text-indent: 28pt; line-height: 21px;"><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;"><br></span><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p style="margin: 5pt 5.3pt 0.0001pt 0cm; text-align: justify; text-indent: 28pt; line-height: 21px;"><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p>&nbsp;</o:p></span></p><p class="MsoNormal" align="left" style="margin-bottom: 7.5pt; text-indent: 28.1pt; line-height: 21px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">5</span></span><span style="font-weight: 700;"><span style="font-size: 14pt; line-height: 28px; font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">、</span></span><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">2+2</span></span><span style="font-weight: 700;"><span style="font-size: 14pt; line-height: 28px; font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">产教融合、校企协同育人</span></span><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p></o:p></span></p><p class="MsoNormal" align="left" style="margin-bottom: 7.5pt; text-indent: 28pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14pt; font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">机器人学院与东莞松山湖国际机器人产业基地、香港科技大学联合共建，采用</span><span lang="EN-US" style="font-size: 14pt; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">2+2</span><span style="font-size: 14pt; font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">的培养模式。前</span><span lang="EN-US" style="font-size: 14pt; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">2</span><span style="font-size: 14pt; font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">年主要在学校学习，侧重于数学基础、科学基础和专业基础的学习和工程能力的培养；后</span><span lang="EN-US" style="font-size: 14pt; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">2</span><span style="font-size: 14pt; font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">年主要在东莞松山湖国际机器人产业化基地培养，依托香港科技大学的师资力量、产业界高端人才与基地产业化能力，与机器人企业深度融合，侧重于各专业与机器人紧密联系的领域课程学习以及跨专业的实际开发项目训练，并接受面向产业的金融课程、创业课程学习和训练，完成毕业设计。</span><span lang="EN-US" style="font-size: 14pt; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p></o:p></span></p><p class="MsoNormal" align="left" style="margin-bottom: 7.5pt; text-indent: 28.1pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; font-family: 宋体;"><o:p>&nbsp;</o:p></span></span></p><p class="Style1" style="margin-left: 0cm; text-indent: 28.1pt;"><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: 宋体;">6</span></span><span style="font-weight: 700;"><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">、高水平师资<span lang="EN-US"><o:p></o:p></span></span></span></p><p class="Style1" style="margin-left: 0cm; text-indent: 28pt;"><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">机器人学院的师资来源：（<span lang="EN-US">1</span></span><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">）东莞理工学院各专业的知名教授和教师；（<span lang="EN-US">2</span>）机器人学院聘请的台湾师资；（<span lang="EN-US">3</span>）香港科技大学机器人研究所国际知名教授团队；（<span lang="EN-US">4</span>）松山湖国际机器人产业基地及知名企业的工程师、行业企业精英；（<span lang="EN-US">5</span>）国际国内创业及金融投资企业、金融投资成功人士组成的一流师资队伍。教师具有一流水准、国际视野、产业特色、创业阅历的特点。<span lang="EN-US"><o:p></o:p></span></span></p><p class="Style1" style="margin-left: 0cm; text-indent: 28pt;"><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: 宋体;"><o:p>&nbsp;</o:p></span></p><p class="MsoNormal" style="margin-left: 28.1pt; line-height: 21px;"><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: 宋体;">7</span></span><span style="font-weight: 700;"><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">、学习资源支持<span lang="EN-US"><o:p></o:p></span></span></span></p><p class="MsoNormal" style="text-indent: 28.1pt; line-height: 21px;"><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: 宋体;">(1)&nbsp;</span></span><span style="font-weight: 700;"><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">英语教学。</span></span><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: 宋体;">2016</span><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">级起，学生的英语教学参照雅思考试的要求进行教学，其中初级和中级由校内教师教学，高级聘请专业机构教学；部分专业课将使用原版教材，由台湾师资采用中文授课。<span lang="EN-US"><o:p></o:p></span></span></p><p class="MsoNormal" style="text-indent: 28.1pt; line-height: 21px;"><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: 宋体;">(2)&nbsp;</span></span><span style="font-weight: 700;"><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">学习支持。</span></span><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">实行科教结合、校企结合，配备导师，为每一位学生提供在校内和企业阶段的学习和成才道路提供专业的指导。<span lang="EN-US"><o:p></o:p></span></span></p><p class="MsoNormal" style="text-indent: 28.1pt; line-height: 21px;"><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: 宋体;">(3)&nbsp;</span></span><span style="font-weight: 700;"><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">实践条件。</span></span><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">校内有完善、先进的实验教学平台；校外依托国际机器人产业基地和相关联的企业</span><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">，满足实践环节的教学要求。</span><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: 宋体;"><o:p></o:p></span></p><p class="MsoNormal" style="text-indent: 28.1pt; line-height: 21px;"><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: 宋体;">(4)&nbsp;</span></span><span style="font-weight: 700;"><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">就业支持。</span></span><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">机器人学院直接面向机器人智能装备产业，与行业共建，学生在学习过程将接触到大量的企业和企业各类人士，与各类企业联系本身就十分紧密，学生具有天然的就业优势。<span lang="EN-US"><o:p></o:p></span></span></p><p class="MsoNormal" style="text-indent: 28.1pt; line-height: 21px;"><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: 宋体;">(5)&nbsp;</span></span><span style="font-weight: 700;"><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">创业支持。</span></span><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">通过校内的创业训练项目和创业实践项目以及</span><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">开设一些创业培课程</span><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">指导学生进行创业学习，聘请国际国内创业及金融投资成功人士担任授课教师，</span><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">开展可行性研究、编制商业计划书、模拟企业运行、参加企业实践、撰写创业报告等。</span><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: 宋体;"><o:p></o:p></span></p><p class="Style1" style="margin-left: 0cm; text-indent: 28.1pt;"><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: 宋体;">(6)&nbsp;</span></span><span style="font-weight: 700;"><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">奖学金。</span></span><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">奖学金包括国家奖学金、国家励志奖学金、校级优秀学生奖学金以及</span><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">国际机器人产业基地奖</span><span style="font-size: 14pt; line-height: 28px; font-family: 宋体;">学金等。<span lang="EN-US"><o:p></o:p></span></span></p><p class="Style1" style="margin-left: 0cm; text-indent: 28pt;"><span lang="EN-US" style="font-size: 14pt; line-height: 28px; font-family: 宋体;"><o:p>&nbsp;</o:p></span></p><p class="MsoNormal" style="text-indent: 28.1pt;"><span style="font-weight: 700;"><span lang="EN-US" style="font-size: 14pt; font-family: 宋体;">8</span></span><span style="font-weight: 700;"><span style="font-size: 14pt; font-family: 宋体;">、淘汰制</span></span><span lang="EN-US" style="font-size: 14pt; font-family: 宋体;"><o:p></o:p></span></p><p class="MsoNormal" style="text-indent: 28pt;"><span style="font-size: 14pt; font-family: 宋体;">机器人学院实行淘汰制，其中第一学期末将根据学习成绩末位淘汰<span lang="EN-US">12</span>人；之后每个学期参考学校卓越班的标准进行淘汰</span><span style="font-size: 14pt; font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">。</span></p><p class="MsoNormal" style="text-indent: 28pt;"><span style="font-size: 14pt; font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><br></span></p>\n                                                                    <p></p>                           ', '系统管理员', '系统管理员', '1523360961');

-- --------------------------------------------------------

--
-- 表的结构 `robot_institute_photo_album`
--

CREATE TABLE IF NOT EXISTS `robot_institute_photo_album` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `album_file` varchar(100) COLLATE utf8_bin NOT NULL,
  `album_description` varchar(100) COLLATE utf8_bin NOT NULL,
  `user_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学院相册' AUTO_INCREMENT=43 ;

--
-- 转存表中的数据 `robot_institute_photo_album`
--

INSERT INTO `robot_institute_photo_album` (`id`, `album_file`, `album_description`, `user_type`, `user_name`, `date`) VALUES
(42, '/RobotInstitute/Public/images/InstitutePhotoAlbum/d81d6c47f66108934938edd4052f8d7e.jpg', '民国老大哥', '系统管理员', '陈俊杰', '1523783972'),
(40, '/RobotInstitute/Public/images/InstitutePhotoAlbum/621be20cd70e52d52236079b61b02a76.jpg', '民国老大哥', '系统管理员', '陈俊杰', '1523783972'),
(41, '/RobotInstitute/Public/images/InstitutePhotoAlbum/5738acb3bfc2ed0cc22ac42b90f44f9a.jpg', '民国老大哥', '系统管理员', '陈俊杰', '1523783972');

-- --------------------------------------------------------

--
-- 表的结构 `robot_institute_show`
--

CREATE TABLE IF NOT EXISTS `robot_institute_show` (
  `group_id` int(5) NOT NULL DEFAULT '3',
  `catalog_id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog` varchar(50) COLLATE utf8_bin NOT NULL,
  `catalog_table` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`catalog_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学院风采' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `robot_institute_show`
--

INSERT INTO `robot_institute_show` (`group_id`, `catalog_id`, `catalog`, `catalog_table`) VALUES
(3, 1, '学院时事', 'InstituteShowCurrentEvents'),
(3, 5, '假期培训', 'InstituteShowVacationTraining'),
(3, 4, '比赛获奖', 'InstituteShowCompetitionAwards'),
(3, 6, '外出参观', 'InstituteShowVisit'),
(3, 2, '项目设计', 'InstituteShowProjectDesign'),
(3, 3, '学科竞赛', 'InstituteShowSubjectCompetition');

-- --------------------------------------------------------

--
-- 表的结构 `robot_institute_show_competition_awards`
--

CREATE TABLE IF NOT EXISTS `robot_institute_show_competition_awards` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(2) NOT NULL DEFAULT '4',
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `user_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学院风采——比赛获奖' AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- 表的结构 `robot_institute_show_current_events`
--

CREATE TABLE IF NOT EXISTS `robot_institute_show_current_events` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(2) NOT NULL DEFAULT '1',
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `user_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学院风采——学院时事' AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `robot_institute_show_current_events`
--

INSERT INTO `robot_institute_show_current_events` (`id`, `catalog_id`, `title`, `content`, `user_type`, `user_name`, `date`) VALUES
(23, 1, '学院时事', '<p>学院时事学院时事学院时事学院时事学院时事学院时事学院时事学院时事学院时事学院时事学院时事学院时事学院时事学院时事学院时事<br></p>', '系统管理员', '系统管理员', '1523369037');

-- --------------------------------------------------------

--
-- 表的结构 `robot_institute_show_project_design`
--

CREATE TABLE IF NOT EXISTS `robot_institute_show_project_design` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(2) NOT NULL DEFAULT '2',
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `user_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学院风采——项目设计' AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- 表的结构 `robot_institute_show_subject_competition`
--

CREATE TABLE IF NOT EXISTS `robot_institute_show_subject_competition` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(2) NOT NULL DEFAULT '3',
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `user_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学院风采——学科竞赛' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `robot_institute_show_subject_competition`
--

INSERT INTO `robot_institute_show_subject_competition` (`id`, `catalog_id`, `title`, `content`, `user_type`, `user_name`, `date`) VALUES
(2, 3, '学科竞赛', '<p>学科竞赛学科竞赛学科竞赛学科竞赛学科竞赛学科竞赛学科竞赛学科竞赛学科竞赛<br></p>', '实验室管理员', '实验室管理员', '1522671917');

-- --------------------------------------------------------

--
-- 表的结构 `robot_institute_show_vacation_training`
--

CREATE TABLE IF NOT EXISTS `robot_institute_show_vacation_training` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(2) NOT NULL DEFAULT '5',
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `user_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学院风采——假期培训' AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- 表的结构 `robot_institute_show_visit`
--

CREATE TABLE IF NOT EXISTS `robot_institute_show_visit` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(2) NOT NULL DEFAULT '6',
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `user_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学院风采——外出参观' AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- 表的结构 `robot_learning_resources`
--

CREATE TABLE IF NOT EXISTS `robot_learning_resources` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog` varchar(50) COLLATE utf8_bin NOT NULL,
  `catalog_table` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学习资源' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `robot_learning_resources`
--

INSERT INTO `robot_learning_resources` (`id`, `catalog`, `catalog_table`) VALUES
(1, '机器人实验室', 'LearningResourcesLab'),
(2, '资源下载', 'LearningResourcesDownload');

-- --------------------------------------------------------

--
-- 表的结构 `robot_learning_resources_download`
--

CREATE TABLE IF NOT EXISTS `robot_learning_resources_download` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(2) NOT NULL DEFAULT '2',
  `file_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `file_path` varchar(100) COLLATE utf8_bin NOT NULL,
  `file_title` varchar(50) COLLATE utf8_bin NOT NULL,
  `file_description` varchar(100) COLLATE utf8_bin NOT NULL,
  `file_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学习资源——资料下载' AUTO_INCREMENT=64 ;

--
-- 转存表中的数据 `robot_learning_resources_download`
--

INSERT INTO `robot_learning_resources_download` (`id`, `catalog_id`, `file_name`, `file_path`, `file_title`, `file_description`, `file_type`, `user_type`, `user_name`, `date`) VALUES
(63, 2, '70266f7411be1c1f75e53b8a793e2a6a.zip', '/RobotInstitute/Public/files/20180414/70266f7411be1c1f75e53b8a793e2a6a.zip', 'thinkphp-3.2.3.zip', 'thinkphp-3.2.3框架，来自中国牛人开发的基于典型MVC模型的开源PHP框架，国内比较流行，github地址：https://github.com/top-think/thinkphp', '.zip', '系统管理员', '系统管理员', '1523718346');

-- --------------------------------------------------------

--
-- 表的结构 `robot_learning_resources_lab`
--

CREATE TABLE IF NOT EXISTS `robot_learning_resources_lab` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(2) NOT NULL DEFAULT '2',
  `file_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `file_path` varchar(100) COLLATE utf8_bin NOT NULL,
  `file_title` varchar(50) COLLATE utf8_bin NOT NULL,
  `file_description` varchar(100) COLLATE utf8_bin NOT NULL,
  `file_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学习资源——资料下载' AUTO_INCREMENT=66 ;

-- --------------------------------------------------------

--
-- 表的结构 `robot_login`
--

CREATE TABLE IF NOT EXISTS `robot_login` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `pwd` varchar(50) COLLATE utf8_bin NOT NULL,
  `name` varchar(10) COLLATE utf8_bin NOT NULL,
  `type_id` int(2) NOT NULL,
  `sex` varchar(2) COLLATE utf8_bin NOT NULL,
  `class` varchar(20) COLLATE utf8_bin NOT NULL,
  `major` varchar(10) COLLATE utf8_bin NOT NULL,
  `student_no` varchar(20) COLLATE utf8_bin NOT NULL,
  `long_no` varchar(20) COLLATE utf8_bin NOT NULL,
  `short_no` varchar(10) COLLATE utf8_bin NOT NULL,
  `qq` varchar(15) COLLATE utf8_bin NOT NULL,
  `wechat` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `email_2` (`email`),
  KEY `email_3` (`email`),
  KEY `email_4` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='用户信息表' AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `robot_login`
--

INSERT INTO `robot_login` (`id`, `email`, `pwd`, `name`, `type_id`, `sex`, `class`, `major`, `student_no`, `long_no`, `short_no`, `qq`, `wechat`) VALUES
(23, 'root@163.com', '63a9f0ea7bb98050796b649e85481845', 'root', 6, '男', '2015级机器人4班', '软件工程', '201501', '', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `robot_teaching_work`
--

CREATE TABLE IF NOT EXISTS `robot_teaching_work` (
  `group_id` int(5) NOT NULL DEFAULT '1',
  `catalog_id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog` varchar(50) COLLATE utf8_bin NOT NULL,
  `catalog_table` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`catalog_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='教学工作' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `robot_teaching_work`
--

INSERT INTO `robot_teaching_work` (`group_id`, `catalog_id`, `catalog`, `catalog_table`) VALUES
(1, 1, '教学动态', 'TeachingWorkTeachingDevelopment'),
(1, 2, '专业介绍', 'TeachingWorkMajorIntroduction'),
(1, 3, '学科研究', 'TeachingWorkSubjectResearch');

-- --------------------------------------------------------

--
-- 表的结构 `robot_teaching_work_major_introduction`
--

CREATE TABLE IF NOT EXISTS `robot_teaching_work_major_introduction` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(2) NOT NULL DEFAULT '2',
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `user_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='教学工作——专业介绍' AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- 表的结构 `robot_teaching_work_subject_research`
--

CREATE TABLE IF NOT EXISTS `robot_teaching_work_subject_research` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(2) NOT NULL DEFAULT '3',
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `user_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='教学工作——学科研究' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `robot_teaching_work_subject_research`
--

INSERT INTO `robot_teaching_work_subject_research` (`id`, `catalog_id`, `title`, `content`, `user_type`, `user_name`, `date`) VALUES
(1, 3, '学科竞赛', '<p>学科竞赛学科竞赛学科竞赛学科竞赛学科竞赛学科竞赛学科竞赛学科竞赛<br></p>', '', '', '1517970294');

-- --------------------------------------------------------

--
-- 表的结构 `robot_teaching_work_teaching_development`
--

CREATE TABLE IF NOT EXISTS `robot_teaching_work_teaching_development` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(2) NOT NULL DEFAULT '1',
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `user_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='教学工作——教学动态' AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `robot_teaching_work_teaching_development`
--

INSERT INTO `robot_teaching_work_teaching_development` (`id`, `catalog_id`, `title`, `content`, `user_type`, `user_name`, `date`) VALUES
(21, 1, '教学动态', '\n              <p style="text-align: center; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;教学动态<br></p>         ', '系统管理员', 'root', '1523786120');

-- --------------------------------------------------------

--
-- 表的结构 `robot_temporary`
--

CREATE TABLE IF NOT EXISTS `robot_temporary` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `pwd` varchar(50) COLLATE utf8_bin NOT NULL,
  `name` varchar(10) COLLATE utf8_bin NOT NULL,
  `sex` varchar(2) COLLATE utf8_bin NOT NULL,
  `class` varchar(20) COLLATE utf8_bin NOT NULL,
  `major` varchar(10) COLLATE utf8_bin NOT NULL,
  `student_no` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='用户注册临时表' AUTO_INCREMENT=22 ;

-- --------------------------------------------------------

--
-- 表的结构 `robot_user_type`
--

CREATE TABLE IF NOT EXISTS `robot_user_type` (
  `type_id` int(2) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='用户类型表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `robot_user_type`
--

INSERT INTO `robot_user_type` (`type_id`, `type`) VALUES
(1, '学生'),
(2, '教师'),
(3, '小编'),
(4, '实验室管理员'),
(5, '教学秘书'),
(6, '系统管理员');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
