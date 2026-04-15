-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2025 at 08:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calgoric_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `forum2`
--

CREATE TABLE `forum2` (
  `srlno` int(11) NOT NULL,
  `dateval` double DEFAULT NULL,
  `month` int(10) DEFAULT NULL,
  `year` int(10) DEFAULT NULL,
  `creator` varchar(250) DEFAULT NULL,
  `caption` varchar(250) DEFAULT NULL,
  `has` varchar(250) DEFAULT NULL,
  `public` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `forum2`
--

INSERT INTO `forum2` (`srlno`, `dateval`, `month`, `year`, `creator`, `caption`, `has`, `public`) VALUES
(23, 1742938196491, 3, 2025, 'Suhani_Dutta_24', 'My 1st Post', '#Programming, #Integration', 1),
(24, 1742938339659, 3, 2025, 'Debashish_Dutta_22', 'My 2nd Post', '#File Handling ', 1),
(25, 1743195839930, 3, 2025, 'Calgoric_23', 'this is my new post', '#Algorithm', 0),
(26, 1743425571240, 3, 2025, 'Suhani_Dutta_24', 'My 2nd Post', '#Integration, #Post in Forum', 1),
(27, 1743425810592, 3, 2025, 'Debashish_Dutta_22', 'dsfsdfd', '#Algorithm', 1),
(28, 1743425852472, 3, 2025, 'Debashish_Dutta_22', 'rtv dfgd', '#File Handling ', 1),
(29, 1743425906928, 3, 2025, 'Debashish_Dutta_22', 'sdfsd xcvx', '#Integration', 1),
(30, 1743425972088, 3, 2025, 'Debashish_Dutta_22', 'kbdf', '#Programming', 1),
(31, 1743426025647, 3, 2025, 'Debashish_Dutta_22', 'rtsgb dsfsd', '#Database , #File Handling ', 1),
(32, 1743433413270, 3, 2025, 'Debashish_Dutta_22', 'you are', '#Database ', 1),
(33, 1743446651678, 3, 2025, 'Debashish_Dutta_22', 'my pic', '#Others', 1),
(34, 1743446689254, 3, 2025, 'Debashish_Dutta_22', 'su pic', '#Others', 1),
(35, 1743446758918, 3, 2025, 'Suhani_Dutta_24', 'my pic', '#Others', 1),
(36, 1743446802502, 3, 2025, 'Suhani_Dutta_24', 'hubby pic', '#Others', 1);

-- --------------------------------------------------------

--
-- Table structure for table `func_details`
--

CREATE TABLE `func_details` (
  `srlno` int(200) NOT NULL,
  `name_val` varchar(50) DEFAULT NULL,
  `sort_description` text DEFAULT NULL,
  `main_categori` varchar(50) NOT NULL,
  `sub_catagori` varchar(100) NOT NULL,
  `syntax0` text DEFAULT NULL,
  `syntax1` text DEFAULT NULL,
  `syntax2` text DEFAULT NULL,
  `syntax3` text DEFAULT NULL,
  `syntax4` text DEFAULT NULL,
  `syntax5` text DEFAULT NULL,
  `syntax6` text DEFAULT NULL,
  `syntax7` text DEFAULT NULL,
  `syntax8` text DEFAULT NULL,
  `syntax9` text DEFAULT NULL,
  `syntax10` text DEFAULT NULL,
  `syntax11` text DEFAULT NULL,
  `syntax12` text DEFAULT NULL,
  `syntax13` text DEFAULT NULL,
  `syntax14` text DEFAULT NULL,
  `description0` text DEFAULT NULL,
  `description1` text DEFAULT NULL,
  `description2` text DEFAULT NULL,
  `description3` text DEFAULT NULL,
  `description4` text DEFAULT NULL,
  `description5` text DEFAULT NULL,
  `description6` text DEFAULT NULL,
  `description7` text DEFAULT NULL,
  `description8` text DEFAULT NULL,
  `description9` text DEFAULT NULL,
  `description10` text DEFAULT NULL,
  `description11` text DEFAULT NULL,
  `description12` text DEFAULT NULL,
  `description13` text DEFAULT NULL,
  `description14` text DEFAULT NULL,
  `examples0` varchar(200) DEFAULT NULL,
  `examples1` varchar(200) DEFAULT NULL,
  `examples2` varchar(200) DEFAULT NULL,
  `examples3` varchar(200) DEFAULT NULL,
  `examples4` varchar(200) DEFAULT NULL,
  `examples5` varchar(200) DEFAULT NULL,
  `examples6` varchar(200) DEFAULT NULL,
  `examples7` varchar(200) DEFAULT NULL,
  `examples8` varchar(200) DEFAULT NULL,
  `examples9` varchar(200) DEFAULT NULL,
  `examples10` varchar(200) DEFAULT NULL,
  `examples11` varchar(200) DEFAULT NULL,
  `examples12` varchar(200) DEFAULT NULL,
  `examples13` varchar(200) DEFAULT NULL,
  `examples14` varchar(200) DEFAULT NULL,
  `ExampleDescription0` text DEFAULT NULL,
  `ExampleDescription1` text DEFAULT NULL,
  `ExampleDescription2` text DEFAULT NULL,
  `ExampleDescription3` text DEFAULT NULL,
  `ExampleDescription4` text DEFAULT NULL,
  `ExampleDescription5` text DEFAULT NULL,
  `ExampleDescription6` text DEFAULT NULL,
  `ExampleDescription7` text DEFAULT NULL,
  `ExampleDescription8` text DEFAULT NULL,
  `ExampleDescription9` text DEFAULT NULL,
  `ExampleDescription10` text DEFAULT NULL,
  `ExampleDescription11` text DEFAULT NULL,
  `ExampleDescription12` text DEFAULT NULL,
  `ExampleDescription13` text DEFAULT NULL,
  `ExampleDescription14` text DEFAULT NULL,
  `input0` varchar(50) DEFAULT NULL,
  `input1` varchar(50) DEFAULT NULL,
  `input2` varchar(50) DEFAULT NULL,
  `input3` varchar(50) DEFAULT NULL,
  `input4` varchar(50) DEFAULT NULL,
  `input5` varchar(50) DEFAULT NULL,
  `input6` varchar(50) DEFAULT NULL,
  `input7` varchar(50) DEFAULT NULL,
  `input8` varchar(50) DEFAULT NULL,
  `input9` varchar(50) DEFAULT NULL,
  `input10` varchar(50) DEFAULT NULL,
  `input11` varchar(50) DEFAULT NULL,
  `input12` varchar(50) DEFAULT NULL,
  `input13` varchar(50) DEFAULT NULL,
  `input14` varchar(50) DEFAULT NULL,
  `input15` varchar(50) DEFAULT NULL,
  `input16` varchar(50) DEFAULT NULL,
  `input17` varchar(50) DEFAULT NULL,
  `input18` varchar(50) DEFAULT NULL,
  `input19` varchar(50) DEFAULT NULL,
  `input_type0` varchar(50) DEFAULT NULL,
  `input_type1` varchar(50) DEFAULT NULL,
  `input_type2` varchar(50) DEFAULT NULL,
  `input_type3` varchar(50) DEFAULT NULL,
  `input_type4` varchar(50) DEFAULT NULL,
  `input_type5` varchar(50) DEFAULT NULL,
  `input_type6` varchar(50) DEFAULT NULL,
  `input_type7` varchar(50) DEFAULT NULL,
  `input_type8` varchar(50) DEFAULT NULL,
  `input_type9` varchar(50) DEFAULT NULL,
  `input_type10` varchar(50) DEFAULT NULL,
  `input_type11` varchar(50) DEFAULT NULL,
  `input_type12` varchar(50) DEFAULT NULL,
  `input_type13` varchar(50) DEFAULT NULL,
  `input_type14` varchar(50) DEFAULT NULL,
  `input_type15` varchar(50) DEFAULT NULL,
  `input_type16` varchar(50) DEFAULT NULL,
  `input_type17` varchar(50) DEFAULT NULL,
  `input_type18` varchar(50) DEFAULT NULL,
  `input_type19` varchar(50) DEFAULT NULL,
  `input_desc0` text DEFAULT NULL,
  `input_desc1` text DEFAULT NULL,
  `input_desc2` text DEFAULT NULL,
  `input_desc3` text DEFAULT NULL,
  `input_desc4` text DEFAULT NULL,
  `input_desc5` text DEFAULT NULL,
  `input_desc6` text DEFAULT NULL,
  `input_desc7` text DEFAULT NULL,
  `input_desc8` text DEFAULT NULL,
  `input_desc9` text DEFAULT NULL,
  `input_desc10` text DEFAULT NULL,
  `input_desc11` text DEFAULT NULL,
  `input_desc12` text DEFAULT NULL,
  `input_desc13` text DEFAULT NULL,
  `input_desc14` text DEFAULT NULL,
  `input_desc15` text DEFAULT NULL,
  `input_desc16` text DEFAULT NULL,
  `input_desc17` text DEFAULT NULL,
  `input_desc18` text DEFAULT NULL,
  `input_desc19` text DEFAULT NULL,
  `output0` varchar(50) DEFAULT NULL,
  `output1` varchar(50) DEFAULT NULL,
  `output2` varchar(50) DEFAULT NULL,
  `output3` varchar(50) DEFAULT NULL,
  `output4` varchar(50) DEFAULT NULL,
  `output5` varchar(50) DEFAULT NULL,
  `output6` varchar(50) DEFAULT NULL,
  `output7` varchar(50) DEFAULT NULL,
  `output8` varchar(50) DEFAULT NULL,
  `output9` varchar(50) DEFAULT NULL,
  `output10` varchar(50) DEFAULT NULL,
  `output11` varchar(50) DEFAULT NULL,
  `output12` varchar(50) DEFAULT NULL,
  `output13` varchar(50) DEFAULT NULL,
  `output14` varchar(50) DEFAULT NULL,
  `output15` varchar(50) DEFAULT NULL,
  `output16` varchar(50) DEFAULT NULL,
  `output17` varchar(50) DEFAULT NULL,
  `output18` varchar(50) DEFAULT NULL,
  `output19` varchar(50) DEFAULT NULL,
  `output_type0` varchar(50) DEFAULT NULL,
  `output_type1` varchar(50) DEFAULT NULL,
  `output_type2` varchar(50) DEFAULT NULL,
  `output_type3` varchar(50) DEFAULT NULL,
  `output_type4` varchar(50) DEFAULT NULL,
  `output_type5` varchar(50) DEFAULT NULL,
  `output_type6` varchar(50) DEFAULT NULL,
  `output_type7` varchar(50) DEFAULT NULL,
  `output_type8` varchar(50) DEFAULT NULL,
  `output_type9` varchar(50) DEFAULT NULL,
  `output_type10` varchar(50) DEFAULT NULL,
  `output_type11` varchar(50) DEFAULT NULL,
  `output_type12` varchar(50) DEFAULT NULL,
  `output_type13` varchar(50) DEFAULT NULL,
  `output_type14` varchar(50) DEFAULT NULL,
  `output_type15` varchar(50) DEFAULT NULL,
  `output_type16` varchar(50) DEFAULT NULL,
  `output_type17` varchar(50) DEFAULT NULL,
  `output_type18` varchar(50) DEFAULT NULL,
  `output_type19` varchar(50) DEFAULT NULL,
  `output_desc0` text DEFAULT NULL,
  `output_desc1` text DEFAULT NULL,
  `output_desc2` text DEFAULT NULL,
  `output_desc3` text DEFAULT NULL,
  `output_desc4` text DEFAULT NULL,
  `output_desc5` text DEFAULT NULL,
  `output_desc6` text DEFAULT NULL,
  `output_desc7` text DEFAULT NULL,
  `output_desc8` text DEFAULT NULL,
  `output_desc9` text DEFAULT NULL,
  `output_desc10` text DEFAULT NULL,
  `output_desc11` text DEFAULT NULL,
  `output_desc12` text DEFAULT NULL,
  `output_desc13` text DEFAULT NULL,
  `output_desc14` text DEFAULT NULL,
  `output_desc15` text DEFAULT NULL,
  `output_desc16` text DEFAULT NULL,
  `output_desc17` text DEFAULT NULL,
  `output_desc18` text DEFAULT NULL,
  `output_desc19` text DEFAULT NULL,
  `api` text DEFAULT NULL,
  `algorithms` text DEFAULT NULL,
  `references0` text DEFAULT NULL,
  `references1` text DEFAULT NULL,
  `references2` text DEFAULT NULL,
  `references3` text DEFAULT NULL,
  `references4` text DEFAULT NULL,
  `references5` text DEFAULT NULL,
  `references6` text DEFAULT NULL,
  `references7` text DEFAULT NULL,
  `references8` text DEFAULT NULL,
  `references9` text DEFAULT NULL,
  `references10` text DEFAULT NULL,
  `references11` text DEFAULT NULL,
  `link0` text DEFAULT NULL,
  `link1` text DEFAULT NULL,
  `link2` text DEFAULT NULL,
  `link3` text DEFAULT NULL,
  `link4` text DEFAULT NULL,
  `link5` text DEFAULT NULL,
  `link6` text DEFAULT NULL,
  `link7` text DEFAULT NULL,
  `link8` text DEFAULT NULL,
  `link9` text DEFAULT NULL,
  `link10` text DEFAULT NULL,
  `link11` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `func_details`
--

INSERT INTO `func_details` (`srlno`, `name_val`, `sort_description`, `main_categori`, `sub_catagori`, `syntax0`, `syntax1`, `syntax2`, `syntax3`, `syntax4`, `syntax5`, `syntax6`, `syntax7`, `syntax8`, `syntax9`, `syntax10`, `syntax11`, `syntax12`, `syntax13`, `syntax14`, `description0`, `description1`, `description2`, `description3`, `description4`, `description5`, `description6`, `description7`, `description8`, `description9`, `description10`, `description11`, `description12`, `description13`, `description14`, `examples0`, `examples1`, `examples2`, `examples3`, `examples4`, `examples5`, `examples6`, `examples7`, `examples8`, `examples9`, `examples10`, `examples11`, `examples12`, `examples13`, `examples14`, `ExampleDescription0`, `ExampleDescription1`, `ExampleDescription2`, `ExampleDescription3`, `ExampleDescription4`, `ExampleDescription5`, `ExampleDescription6`, `ExampleDescription7`, `ExampleDescription8`, `ExampleDescription9`, `ExampleDescription10`, `ExampleDescription11`, `ExampleDescription12`, `ExampleDescription13`, `ExampleDescription14`, `input0`, `input1`, `input2`, `input3`, `input4`, `input5`, `input6`, `input7`, `input8`, `input9`, `input10`, `input11`, `input12`, `input13`, `input14`, `input15`, `input16`, `input17`, `input18`, `input19`, `input_type0`, `input_type1`, `input_type2`, `input_type3`, `input_type4`, `input_type5`, `input_type6`, `input_type7`, `input_type8`, `input_type9`, `input_type10`, `input_type11`, `input_type12`, `input_type13`, `input_type14`, `input_type15`, `input_type16`, `input_type17`, `input_type18`, `input_type19`, `input_desc0`, `input_desc1`, `input_desc2`, `input_desc3`, `input_desc4`, `input_desc5`, `input_desc6`, `input_desc7`, `input_desc8`, `input_desc9`, `input_desc10`, `input_desc11`, `input_desc12`, `input_desc13`, `input_desc14`, `input_desc15`, `input_desc16`, `input_desc17`, `input_desc18`, `input_desc19`, `output0`, `output1`, `output2`, `output3`, `output4`, `output5`, `output6`, `output7`, `output8`, `output9`, `output10`, `output11`, `output12`, `output13`, `output14`, `output15`, `output16`, `output17`, `output18`, `output19`, `output_type0`, `output_type1`, `output_type2`, `output_type3`, `output_type4`, `output_type5`, `output_type6`, `output_type7`, `output_type8`, `output_type9`, `output_type10`, `output_type11`, `output_type12`, `output_type13`, `output_type14`, `output_type15`, `output_type16`, `output_type17`, `output_type18`, `output_type19`, `output_desc0`, `output_desc1`, `output_desc2`, `output_desc3`, `output_desc4`, `output_desc5`, `output_desc6`, `output_desc7`, `output_desc8`, `output_desc9`, `output_desc10`, `output_desc11`, `output_desc12`, `output_desc13`, `output_desc14`, `output_desc15`, `output_desc16`, `output_desc17`, `output_desc18`, `output_desc19`, `api`, `algorithms`, `references0`, `references1`, `references2`, `references3`, `references4`, `references5`, `references6`, `references7`, `references8`, `references9`, `references10`, `references11`, `link0`, `link1`, `link2`, `link3`, `link4`, `link5`, `link6`, `link7`, `link8`, `link9`, `link10`, `link11`) VALUES
(7, 'pdist', 'Pairwise distance between pairs of observations.', 'Statistics', '', 'D = pdist(X)', 'D = pdist(X,Distance)', 'D = pdist(X,Distance,DistParameter)', '', '', '', '', '', '', '', '', '', '', '', '', 'Returns the Euclidean distance between pairs of observations in X.', 'Returns the distance using the method specified by Distance.', 'Returns the distance using the method specified by Distance and DistParameter. You can specify DistParameter only when Distance is \'seuclidean\', \'minkowski\', or \'mahalanobis\'.', '', '', '', '', '', '', '', '', '', '', '', '', 'Compute Euclidean Distance and Convert Distance Vector to Matrix', 'Compute Pairwise Distance with \'Distance\' paramiter.', 'Compute Pairwise Distance with \'Distance\' and \'DistParameter\' paramiters.', '', '', '', '', '', '', '', '', '', '', '', '', '<p>Create a matrix with three observations and two variables.</p>\n                            <div class=\"code\">                        \n                                <pre><span id=\"code1\">rng(\'default\') % For reproducibility\nX = rand(3,2)</span>\n                                </pre>\n                                <button class=\"codeButton\" title=\"Copy Code to Clipboard\" onclick=\"codeCopy(\'code1\')\"><i class=\"fa fa-copy\"></i></button>\n                            </div>\n\n                            <table class=\"matrx\">\n                                <caption>\n                                    X\n                                </caption>\n                                <tbody><tr>\n                                    <td>0.8147</td>\n                                    <td>0.9134</td>\n                                </tr>\n                                <tr>\n                                    <td>0.9058</td>\n                                    <td>0.6324</td>\n                                </tr>\n                                <tr>\n                                    <td>0.1270</td>\n                                    <td>0.0975</td>\n                                </tr>\n                            </tbody></table>     \n\n                            <p>Compute the Euclidean distance.</p>\n                            <div class=\"code\">                        \n                                <pre><span id=\"code2\">D = pdist(X)</span>\n                                </pre>\n                                <button class=\"codeButton\" title=\"Copy Code to Clipboard\" onclick=\"codeCopy(\'code2\')\"><i class=\"fa fa-copy\"></i></button>\n                            </div>\n\n                            <table class=\"matrx\">\n                                <caption>\n                                    D\n                                </caption>\n                                <tbody><tr>\n                                    <td>0.2954</td>\n                                </tr>\n                                <tr>\n                                    <td>1.0670</td>\n                                </tr>\n                                <tr>\n                                    <td>0.9448</td>\n                                </tr>\n                            </tbody></table>\n\n                            <p>The pairwise distances are arranged in the order (2,1), (3,1), (3,2). You can easily locate the distance between observations i and j by using squareform.</p>\n                            <div class=\"code\">                        \n                                <pre><span id=\"code3\">Z = squareform(D)</span>\n                                </pre>\n                                <button class=\"codeButton\" title=\"Copy Code to Clipboard\" onclick=\"codeCopy(\'code3\')\"><i class=\"fa fa-copy\"></i></button>\n                            </div>\n\n                            <table class=\"matrx\">\n                                <caption>\n                                    Z\n                                </caption>\n                                <tbody><tr>\n                                    <td>0</td>\n                                    <td>0.2954</td>\n                                    <td>1.0670</td>\n                                </tr>\n                                <tr>\n                                    <td>0.2954</td>\n                                    <td>0</td>\n                                    <td>0.9448</td>\n                                </tr>\n                                <tr>\n                                    <td>1.0670</td>\n                                    <td>0.9448</td>\n                                    <td>0</td>\n                                </tr>\n                            </tbody></table>', '<p>Create a matrix with three observations and two variables.</p>\n                            <div class=\"code\">                        \n                                <pre><span id=\"code4\">rng(\'default\') % For reproducibility\nX = rand(3,2);</span>\n                                </pre>\n                                <button class=\"codeButton\" title=\"Copy Code to Clipboard\" onclick=\"codeCopy(\'code4\')\"><i class=\"fa fa-copy\"></i></button>\n                            </div>\n\n                            <p>Compute the Minkowski distance with the default exponent 2.</p>\n                            <div class=\"code\">                        \n                                <pre><span id=\"code5\">D1 = pdist(X,\'minkowski\')</span>\n                                </pre>\n                                <button class=\"codeButton\" title=\"Copy Code to Clipboard\" onclick=\"codeCopy(\'code5\')\"><i class=\"fa fa-copy\"></i></button>\n                            </div>\n                   \n                            <table class=\"matrx\">\n                                <caption>\n                                    D1\n                                </caption>\n                                <tbody><tr>\n                                    <td>0.2954</td>\n                                </tr>\n                                <tr>\n                                    <td>1.0670</td>\n                                </tr>\n                                <tr>\n                                    <td>0.9448</td>\n                                </tr>\n                            </tbody></table>', '<p>Create a matrix with three observations and two variables.</p>\n                            <div class=\"code\">                        \n                                <pre><span id=\"code6\">rng(\'default\') % For reproducibility\nX = rand(3,2);</span>\n                                </pre>\n                                <button class=\"codeButton\" title=\"Copy Code to Clipboard\" onclick=\"codeCopy(\'code6\')\"><i class=\"fa fa-copy\"></i></button>\n                            </div>\n\n                            <p>Compute the Minkowski distance with an exponent of 1, which is equal to the city block distance.</p>\n                            <div class=\"code\">                        \n                                <pre><span id=\"code7\">D2 = pdist(X,\'minkowski\',1)</span>\n                                </pre>\n                                <button class=\"codeButton\" title=\"Copy Code to Clipboard\" onclick=\"codeCopy(\'code7\')\"><i class=\"fa fa-copy\"></i></button>\n                            </div>\n                   \n                            <table class=\"matrx\">\n                                <caption>\n                                    D2\n                                </caption>\n                                <tbody><tr>\n                                    <td>0.3721</td>\n                                </tr>\n                                <tr>\n                                    <td>1.5036</td>\n                                </tr>\n                                <tr>\n                                    <td>1.3136</td>\n                                </tr>\n                            </tbody></table>\n\n                            <p>Compute the city block distance.</p>\n                            <div class=\"code\">                        \n                                <pre><span id=\"code8\">D3 = pdist(X,\'cityblock\')</span>\n                                </pre>\n                                <button class=\"codeButton\" title=\"Copy Code to Clipboard\" onclick=\"codeCopy(\'code8\')\"><i class=\"fa fa-copy\"></i></button>\n                            </div>\n\n                            <table class=\"matrx\">\n                                <caption>\n                                    D3\n                                </caption>\n                                <tbody><tr>\n                                    <td>0.3721</td>\n                                </tr>\n                                <tr>\n                                    <td>1.5036</td>\n                                </tr>\n                                <tr>\n                                    <td>1.3136</td>\n                                </tr>\n                            </tbody></table>', '', '', '', '', '', '', '', '', '', '', '', '', 'X', 'Distance', 'DistParameter', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Double Matrix | Double Table', 'String', 'Numeric Scaler', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '<p>Input data, specified as a numeric matrix of size m-by-n. Rows correspond to individual observations, and columns correspond to individual variables.</p>', '<p>Distance metric, specified as a character vector, string scalar, or function handle, as described in the following table.</p>\n\n\n                        <table>\n                            <caption>\n                                Description of Distance Types\n                            </caption>\n                            <thead>\n                                <tr>\n                                    <th>Value</th>\n                                    <th>Description</th>\n                                </tr>\n                            </thead>\n                            <tbody><tr>\n                                <td>\'euclidean\'</td>\n                                <td>Euclidean distance (default).</td>\n                            </tr>\n                            <tr>\n                                <td>\'seuclidean\'</td>\n                                <td>Standardized Euclidean distance. Each coordinate difference between observations is scaled by dividing by the corresponding element of the standard deviation, S = std(X,\'omitnan\'). Use DistParameter to specify a different value for S.</td>\n                            </tr>\n                            <tr>\n                                <td>\'mahalanobis\'</td>\n                                <td>Mahalanobis distance, computed using the sample covariance of X, C = cov(X,\'omitrows\'). Use DistParameter to specify a different value for C, where the matrix C is symmetric and positive definite.</td>\n                            </tr>\n                            <tr>\n                                <td>\'cityblock\'</td>\n                                <td>City block distance.</td>\n                            </tr>\n                            <tr>\n                                <td>\'minkowski\'</td>\n                                <td>Minkowski distance. The default exponent is 2. Use DistParameter to specify a different exponent P, where P is a positive scalar value of the exponent.</td>\n                            </tr>\n                            <tr>\n                                <td>\'chebychev\'</td>\n                                <td>Chebychev distance (maximum coordinate difference).</td>\n                            </tr>\n                            <tr>\n                                <td>\'cosine\'</td>\n                                <td>One minus the cosine of the included angle between points (treated as vectors).</td>\n                            </tr>\n                            <tr>\n                                <td>\'correlation\'</td>\n                                <td>One minus the sample correlation between points (treated as sequences of values).</td>\n                            </tr>\n                            <tr>\n                                <td>\'hamming\'</td>\n                                <td>Hamming distance, which is the percentage of coordinates that differ.</td>\n                            </tr>\n                            <tr>\n                                <td>\'jaccard\'</td>\n                                <td>One minus the Jaccard coefficient, which is the percentage of nonzero coordinates that differ.</td>\n                            </tr>\n                            <tr>\n                                <td>\'spearman\'</td>\n                                <td>One minus the sample Spearman\'s rank correlation between observations (treated as sequences of values).</td>\n                            </tr>\n                        </tbody></table>\n\n                        <p>For definitions, see <a href=\"#algo\">Algorithms.</a></p>\n\n                        <p>When you use \'seuclidean\', \'minkowski\', or \'mahalanobis\', you can specify an additional input argument DistParameter to control these metrics. You can also use these metrics in the same way as the other metrics with the default value of DistParameter.</p>', '<p>Distance metric parameter values, specified as a positive scalar, numeric vector, or numeric matrix. This argument is valid only when you specify Distance as \'seuclidean\', \'minkowski\', or \'mahalanobis\'.</p>\n\n                        <ul>\n                          <li>If Distance is \'seuclidean\', DistParameter is a vector of scaling factors for each dimension, specified as a positive vector. The default value is std(X,\'omitnan\').</li>\n                          <li>If Distance is \'minkowski\', DistParameter is the exponent of Minkowski distance, specified as a positive scalar. The default value is 2.</li>\n                          <li>If Distance is \'mahalanobis\', DistParameter is a covariance matrix, specified as a numeric matrix. The default value is cov(X,\'omitrows\'). DistParameter must be symmetric and positive definite.</li>\n                        </ul>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Numeric Field', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '<p>Pairwise distances, returned as a numeric row vector of length m(mâ€“1)/2, corresponding to pairs of observations, where m is the number of observations in X.</p>\n\n                        <p>The distances are arranged in the order (2,1), (3,1), ..., (m,1), (3,2), ..., (m,2), ..., (m,mâ€“1), i.e., the lower-left triangle of the m-by-m distance matrix in column order. The pairwise distance between observations i and j is in D((i-1)*(m-i/2)+j-i) for iâ‰¤j.</p>\n\n                        <p>You can convert D into a symmetric matrix by using the squareform function. Z = squareform(D) returns an m-by-m matrix where Z(i,j) corresponds to the pairwise distance between observations i and j.</p>\n\n                        <p>If observation i or j contains NaNs, then the corresponding value in D is NaN for the built-in distance functions.</p>\n\n                        <p>D is commonly used as a dissimilarity matrix in clustering or multidimensional scaling. For details, see Hierarchical Clustering and the function reference pages for cmdscale, cophenet, linkage, mdscale, and optimalleaforder. These functions take D as an input argument.</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '<p>A distance metric is a function that defines a distance between two observations. pdist supports various distance metrics: Euclidean distance, standardized Euclidean distance, Mahalanobis distance, city block distance, Minkowski distance, Chebychev distance, cosine distance, correlation distance, Hamming distance, Jaccard distance, and Spearman distance.</p>\n\n                        <p>Given an m-by-n data matrix X, which is treated as m (1-by-n) row vectors $X_1$, $X_2$, ..., $X_m$, the various distances between the vector xs and xt are defined as follows:</p>\n                        <ul>\n                            <li>\n                                <p>Euclidean distance</p>\n                                <p>$$d_s_t^2 = (X_s - X_t)(X_s - X_t)^\'.$$</p>\n                                <p>The Euclidean distance is a special case of the Minkowski distance, where p = 2.</p>\n                            </li>\n                            <li>\n                                <p>Standardized Euclidean distance</p>\n                                <p>$$d_s_t^2 = (X_s-X_t)V^{-1}(X_s-X_t)^\',$$</p>\n                                <p>where V is the n-by-n diagonal matrix whose jth diagonal element is $(S(j))^2$, where S is a vector of scaling factors for each dimension.</p>\n                            </li>\n                            <li>\n                                <p>Mahalanobis distance</p>\n                                <p>$$d_s_t^2 = (X_s - X_t)C^(-1)(X_s - X_t)^\'.$$</p>\n                                <p>where C is the covariance matrix.</p>\n                            </li>\n                            <li>\n                                <p>City block distance</p>\n                                <p>$$d_s_t = âˆ‘â†™{j=1}â†–n|X_s_j - X_t_j|.$$</p>\n                                <p>The city block distance is a special case of the Minkowski distance, where p = 1.</p>\n                            </li>\n                            <li>\n                                <p>Minkowski distance</p>\n                                <p>$$d_s_t = âˆš^p{âˆ‘â†™{j=1}â†–n|X_s_j - X_t_j|^p}.$$</p>\n                                <p>For the special case of p = 1, the Minkowski distance gives the city block distance. For the special case of p = 2, the Minkowski distance gives the Euclidean distance. For the special case of p = âˆž, the Minkowski distance gives the Chebychev distance.</p>\n                            </li>\n                            <li>\n                                <p>Chebychev distance</p>\n                                <p>$$d_s_t = max_j{(|X_s_j - X_t_j|)}.$$</p>\n                                <p>The Chebychev distance is a special case of the Minkowski distance, where p = âˆž.</p>\n                            </li>\n                            <li>\n                                <p>Cosine distance</p>\n                                <p>$$d_s_t = 1-{X_s{X_t}^\'}/âˆš{(X_s{X_s}^\')(X_t{X_t}^\')}.$$</p>\n                                <p></p>\n                            </li>\n                            <li>\n                                <p>Correlation distance</p>\n                                <p>$$d_s_t = 1-{(X_s-\\ov X_s){(X_t-\\ov X_t)}^\'}/{âˆš{{(X_s-\\ov X_s){(X_s-\\ov X_s)}^\'}}âˆš{{(X_t-\\ov X_t){(X_t-\\ov X_t)}^\'}}},$$ where </p>\n                                <p>$\\ov X_s = {1/n}âˆ‘â†™{j}X_s_j$ and $\\ov X_t = {1/n}âˆ‘â†™{j}X_t_j$</p>\n                            </li>\n                            <li>\n                                <p>Hamming distance</p>\n                                <p>$$d_s_t = (#(X_s_j â‰  X_t_j)/n).$$</p>\n                                <p></p>\n                            </li>\n                            <li>\n                                <p>Jaccard distance</p>\n                                <p>$$d_s_t = ({#[(X_s_j â‰  X_t_j)â‹‚((X_s_j â‰  0)â‹ƒ(X_t_j â‰  0))]}/{#[(X_s_j â‰  0)â‹ƒ(X_t_j â‰  0)]}).$$</p>\n                                <p></p>\n                            </li>\n                            <li>\n                                <p>Spearman distance</p>\n                                <p>$$d_s_t = 1-{{(R_s-\\ov R_s)(R_t-\\ov R_t)^\'}/{âˆš{(R_s-\\ov R_s)(R_s-\\ov R_s)^\'}âˆš{(R_t-\\ov R_t)(R_t-\\ov R_t)^\'}}},$$ where</p>\n                                <ul>\n                                    <li>$R_s_j$ is the rank of $X_s_j$ taken over $X_1_j, X_2_j, ...X_m_j$, as computed by <a href=\"#tiedrank\">tiedrank</a>.</li>\n                                    <li>$R_s$ and $R_t$ are the coordinate-wise rank vectors of $X_s$ and $X_t$, i.e., $R_s = (R_s_1,R_s_2,...R_s_n)$.</li>\n                                    <li>$\\ov R_s={1/n}âˆ‘â†™{j}R_s_j=(n+1)/2$.</li>\n                                    <li>$\\ov R_t={1/n}âˆ‘â†™{j}R_t_j=(n+1)/2$.</li>\n                                </ul>\n                            </li>\n                        </ul>', 'Jarrous, Ayman; Pinkas, Benny (2009). \"Secure Hamming Distance Based Computation and Its Applications\". In Abdalla, Michel; Pointcheval, David; Fouque, Pierre-Alain; Vergnaud, Damien (eds.).', 'Albanie, Samuel. Euclidean Distance Matrix Trick. June, 2019. Available at <a href=\"https://samuelalbanie.com/files/Euclidean_distance_trick.pdf\" target=\"â€_blankâ€\">https://samuelalbanie.com/files/Euclidean_distance_trick.pdf.</a>', 'Zezula, Pavel; Amato, Giuseppe; Dohnal, Vlastislav; Batko, Michal (2006), \"Chapter 1, Foundations of Metric Space Searching, Section 3.1, Minkowski Distances\", Similarity Search: The Metric Space Approach, Advances in Database Systems, Springer', '', '', '', '', '', '', '', '', '', 'cluster', 'clusterdata', 'linkage', 'pdist2', 'squareform', '', '', '', '', '', '', ''),
(8, 'pdist2', 'Pairwise distance between two sets of observations', 'Statistics', '', 'D = pdist2(X,Y,Distance)', 'D = pdist2(X,Y,Distance,DistParameter)', '', '', '', '', '', '', '', '', '', '', '', '', '', 'D = pdist2(X,Y,Distance) returns the distance between each pair of observations in X and Y using the metric specified by Distance.', 'D = pdist2(X,Y,Distance,DistParameter) returns the distance using the metric specified by Distance and DistParameter. You can specify DistParameter only when Distance is \'seuclidean\', \'minkowski\', or \'mahalanobis\'.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 'f7', '', 'Optimization \\&amp; Equation Solver', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 'b7', '', 'Optimization &amp; Equation Solver', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 'l9', '', 'Optimization &amp; Equation Solver', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 'g1', '', 'Optimization & Equation Solver', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 'x23', '', 'Optimization & Equation Solver', '', 'x23(i)', 'x23(u,i)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 'bsplin2', '', 'Polynomial & BSpline', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forum2`
--
ALTER TABLE `forum2`
  ADD PRIMARY KEY (`srlno`);

--
-- Indexes for table `func_details`
--
ALTER TABLE `func_details`
  ADD PRIMARY KEY (`srlno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forum2`
--
ALTER TABLE `forum2`
  MODIFY `srlno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `func_details`
--
ALTER TABLE `func_details`
  MODIFY `srlno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
