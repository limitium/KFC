<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkResidential
 *
 * @ORM\Table(name="SPK_RESIDENTIAL", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RESIDENTIAL_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="SPK_RESIDENTIAL_ID", columns={"ID"}), @ORM\Index(name="SPK_RESIDENTIAL_NAME_RUS", columns={"NAME_RUS"}), @ORM\Index(name="SPK_RESIDENTIAL_PARENTID", columns={"PARENTID"}), @ORM\Index(name="SPK_RESIDENTIAL_SECCODEID", columns={"SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_9_1972918100__K13_K1_6_7_9", columns={"PARENTID", "SPK_PROPERTYID", "ID", "NAME_RUS", "TARGET"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_9_1972918100__K13_K1", columns={"PARENTID", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_9_1972918100__K1_K13_6_7_9", columns={"SPK_PROPERTYID", "PARENTID", "ID", "NAME_RUS", "TARGET"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_9_1972918100__K1_K13", columns={"SPK_PROPERTYID", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K17_K13_K1_6", columns={"SECCODEID", "PARENTID", "SPK_PROPERTYID", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K13_6_17", columns={"SPK_PROPERTYID", "PARENTID", "ID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K17_K13_K1", columns={"SECCODEID", "PARENTID", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K13_K1_K17", columns={"PARENTID", "SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K13_K1_K17_6", columns={"PARENTID", "SPK_PROPERTYID", "SECCODEID", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K17_K13_6", columns={"SPK_PROPERTYID", "SECCODEID", "PARENTID", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_17", columns={"SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K13_K17_6", columns={"SPK_PROPERTYID", "PARENTID", "SECCODEID", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K17_6_13", columns={"SPK_PROPERTYID", "SECCODEID", "ID", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K17_K6_9_11_12_15", columns={"SPK_PROPERTYID", "SECCODEID", "ID", "TARGET", "STATUS", "STATUS_KF", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K6_K1_K17_9_11_12_15", columns={"ID", "SPK_PROPERTYID", "SECCODEID", "TARGET", "STATUS", "STATUS_KF", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K17_K1_K6_9_11_12_15", columns={"SECCODEID", "SPK_PROPERTYID", "ID", "TARGET", "STATUS", "STATUS_KF", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K6_K1_9_11_12_15_17", columns={"ID", "SPK_PROPERTYID", "TARGET", "STATUS", "STATUS_KF", "PROPERTY_NUMBER", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K10_K17_K6_7_9_11_12", columns={"SPK_PROPERTYID", "PROPERTY_TYPE", "SECCODEID", "ID", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K6_K1_7_9_11_12_17", columns={"ID", "SPK_PROPERTYID", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K17_K1_K6_7_9_11_12", columns={"PROPERTY_TYPE", "SECCODEID", "SPK_PROPERTYID", "ID", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K10", columns={"SPK_PROPERTYID", "PROPERTY_TYPE"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K17_K10_K1_K6_7_9_11_12", columns={"SECCODEID", "PROPERTY_TYPE", "SPK_PROPERTYID", "ID", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K1", columns={"PROPERTY_TYPE", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K17_K10_K6_7_9_11_12", columns={"SPK_PROPERTYID", "SECCODEID", "PROPERTY_TYPE", "ID", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10", columns={"PROPERTY_TYPE"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K17_K10", columns={"SECCODEID", "PROPERTY_TYPE"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K17", columns={"PROPERTY_TYPE", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K1_K17_K6_7_9_11_12", columns={"PROPERTY_TYPE", "SPK_PROPERTYID", "SECCODEID", "ID", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K6_K1_K10_7_9_11_12_17", columns={"ID", "SPK_PROPERTYID", "PROPERTY_TYPE", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K6_K1_K10_7_9_11_12", columns={"ID", "SPK_PROPERTYID", "PROPERTY_TYPE", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K1_K6_7_9_11_12", columns={"PROPERTY_TYPE", "SPK_PROPERTYID", "ID", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K10_K6_7_9_11_12", columns={"SPK_PROPERTYID", "PROPERTY_TYPE", "ID", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K6_K1_7_9_11_12", columns={"ID", "SPK_PROPERTYID", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K17_K1_K6_7_9_10_11_12_15", columns={"SECCODEID", "SPK_PROPERTYID", "ID", "NAME_RUS", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K17_K1_6_7_9_11_12_15", columns={"PROPERTY_TYPE", "SECCODEID", "SPK_PROPERTYID", "ID", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K17_K10_K1_6_7_9_11_12_15", columns={"SECCODEID", "PROPERTY_TYPE", "SPK_PROPERTYID", "ID", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K1_K17_6_7_9_11_12_15", columns={"PROPERTY_TYPE", "SPK_PROPERTYID", "SECCODEID", "ID", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K17_K10_6_7_9_11_12_15", columns={"SPK_PROPERTYID", "SECCODEID", "PROPERTY_TYPE", "ID", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K10_K17_6_7_9_11_12_15", columns={"SPK_PROPERTYID", "PROPERTY_TYPE", "SECCODEID", "ID", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K7", columns={"SPK_PROPERTYID", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K1", columns={"NAME_RUS", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K6_K1_9_11_12_15", columns={"ID", "SPK_PROPERTYID", "TARGET", "STATUS", "STATUS_KF", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K6_9_11_12_15", columns={"SPK_PROPERTYID", "ID", "TARGET", "STATUS", "STATUS_KF", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_6_9_11_12_15_17", columns={"SPK_PROPERTYID", "ID", "TARGET", "STATUS", "STATUS_KF", "PROPERTY_NUMBER", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K17_6", columns={"SPK_PROPERTYID", "SECCODEID", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K17_K1_6", columns={"SECCODEID", "SPK_PROPERTYID", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_6_17", columns={"SPK_PROPERTYID", "ID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K10_K6_K17", columns={"SPK_PROPERTYID", "PROPERTY_TYPE", "ID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K6_K10_1_17", columns={"ID", "PROPERTY_TYPE", "SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K6_K1_K17", columns={"PROPERTY_TYPE", "ID", "SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K17_K10_K6", columns={"SPK_PROPERTYID", "SECCODEID", "PROPERTY_TYPE", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K17_K1_K10_K6", columns={"SECCODEID", "SPK_PROPERTYID", "PROPERTY_TYPE", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K17_K13_K1_5_6_8_9_10_11_12_14_15_18", columns={"NAME_RUS", "SECCODEID", "PARENTID", "SPK_PROPERTYID", "MODIFYDATE", "ID", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER", "UPDATED"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K17_K1_K7_K13_5_6_8_9_10_11_12_14_15_18", columns={"SECCODEID", "SPK_PROPERTYID", "NAME_RUS", "PARENTID", "MODIFYDATE", "ID", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER", "UPDATED"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K1_K17_K13_5_6_8_9_10_11_12_14_15_18", columns={"NAME_RUS", "SPK_PROPERTYID", "SECCODEID", "PARENTID", "MODIFYDATE", "ID", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER", "UPDATED"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K7_K17_K13_5_6_8_9_10_11_12_14_15_18", columns={"SPK_PROPERTYID", "NAME_RUS", "SECCODEID", "PARENTID", "MODIFYDATE", "ID", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER", "UPDATED"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K17", columns={"NAME_RUS", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K17_K1_K13_5_6_8_9_10_11_12_14_15_18", columns={"NAME_RUS", "SECCODEID", "SPK_PROPERTYID", "PARENTID", "MODIFYDATE", "ID", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER", "UPDATED"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K17_K13_5_6_8_9_10_11_12_14_15_18", columns={"NAME_RUS", "SECCODEID", "PARENTID", "MODIFYDATE", "ID", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER", "UPDATED"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K6_K1_17", columns={"ID", "SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_7_8_17", columns={"SPK_PROPERTYID", "NAME_RUS", "NAME_ENG", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K17_K1_7_8", columns={"SECCODEID", "SPK_PROPERTYID", "NAME_RUS", "NAME_ENG"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K17_7_8", columns={"SPK_PROPERTYID", "SECCODEID", "NAME_RUS", "NAME_ENG"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K6_7", columns={"ID", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K6_K1_7", columns={"ID", "SPK_PROPERTYID", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K6_7", columns={"SPK_PROPERTYID", "ID", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_6", columns={"NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K1_6", columns={"NAME_RUS", "SPK_PROPERTYID", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K7_6", columns={"SPK_PROPERTYID", "NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K17_K1_K6_7_8_9_11_12_15", columns={"PROPERTY_TYPE", "SECCODEID", "SPK_PROPERTYID", "ID", "NAME_RUS", "NAME_ENG", "TARGET", "STATUS", "STATUS_KF", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K13_K7_K17_K1_6_9_11_12_14", columns={"PARENTID", "NAME_RUS", "SECCODEID", "SPK_PROPERTYID", "ID", "TARGET", "STATUS", "STATUS_KF", "COMMENTS"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K17_K13_K7_K1_6_9_11_12_14", columns={"SECCODEID", "PARENTID", "NAME_RUS", "SPK_PROPERTYID", "ID", "TARGET", "STATUS", "STATUS_KF", "COMMENTS"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K13_K7", columns={"PARENTID", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K13_K17_K1_6_9_11_12_14", columns={"NAME_RUS", "PARENTID", "SECCODEID", "SPK_PROPERTYID", "ID", "TARGET", "STATUS", "STATUS_KF", "COMMENTS"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K17_K1_K13_6_9_11_12_14", columns={"NAME_RUS", "SECCODEID", "SPK_PROPERTYID", "PARENTID", "ID", "TARGET", "STATUS", "STATUS_KF", "COMMENTS"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K17_K1_6_9_11_12_14", columns={"NAME_RUS", "SECCODEID", "SPK_PROPERTYID", "ID", "TARGET", "STATUS", "STATUS_KF", "COMMENTS"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K13", columns={"NAME_RUS", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K13_K7_K17_6_9_11_12_14", columns={"SPK_PROPERTYID", "PARENTID", "NAME_RUS", "SECCODEID", "ID", "TARGET", "STATUS", "STATUS_KF", "COMMENTS"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K17_K1_K7_6", columns={"SECCODEID", "SPK_PROPERTYID", "NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K17_6", columns={"NAME_RUS", "SECCODEID", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K1_6_17", columns={"NAME_RUS", "SPK_PROPERTYID", "ID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_6_17", columns={"NAME_RUS", "ID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K7_K17_6", columns={"SPK_PROPERTYID", "NAME_RUS", "SECCODEID", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K17_K13_5_6_8_9_10_11_12_14_15", columns={"NAME_RUS", "SECCODEID", "PARENTID", "MODIFYDATE", "ID", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K1_K17_K13_5_6_8_9_10_11_12_14_15", columns={"NAME_RUS", "SPK_PROPERTYID", "SECCODEID", "PARENTID", "MODIFYDATE", "ID", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K7_K17_K13_5_6_8_9_10_11_12_14_15", columns={"SPK_PROPERTYID", "NAME_RUS", "SECCODEID", "PARENTID", "MODIFYDATE", "ID", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K17_K1_K7_K13_5_6_8_9_10_11_12_14_15", columns={"SECCODEID", "SPK_PROPERTYID", "NAME_RUS", "PARENTID", "MODIFYDATE", "ID", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K17_K1_K13_5_6_8_9_10_11_12_14_15", columns={"NAME_RUS", "SECCODEID", "SPK_PROPERTYID", "PARENTID", "MODIFYDATE", "ID", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K17_K13_K1_5_6_8_9_10_11_12_14_15", columns={"NAME_RUS", "SECCODEID", "PARENTID", "SPK_PROPERTYID", "MODIFYDATE", "ID", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K17_6_7_9_11_12_15", columns={"SPK_PROPERTYID", "SECCODEID", "ID", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K17_K1_K13_15", columns={"NAME_RUS", "SECCODEID", "SPK_PROPERTYID", "PARENTID", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K17_K13_15", columns={"NAME_RUS", "SECCODEID", "PARENTID", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K17_K1_K7_K13_15", columns={"SECCODEID", "SPK_PROPERTYID", "NAME_RUS", "PARENTID", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K7_K17_K13_15", columns={"SPK_PROPERTYID", "NAME_RUS", "SECCODEID", "PARENTID", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K1_K17_K13_15", columns={"NAME_RUS", "SPK_PROPERTYID", "SECCODEID", "PARENTID", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K17_K13_K1_15", columns={"NAME_RUS", "SECCODEID", "PARENTID", "SPK_PROPERTYID", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K6_7_13_15_17", columns={"SPK_PROPERTYID", "ID", "NAME_RUS", "PARENTID", "PROPERTY_NUMBER", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K17_K10_K9_K1_6", columns={"NAME_RUS", "SECCODEID", "PROPERTY_TYPE", "TARGET", "SPK_PROPERTYID", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K9_K10_K7_K1_6_17", columns={"TARGET", "PROPERTY_TYPE", "NAME_RUS", "SPK_PROPERTYID", "ID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K9_K7_K10_K1_17", columns={"TARGET", "NAME_RUS", "PROPERTY_TYPE", "SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K9_K1_K10_17", columns={"TARGET", "SPK_PROPERTYID", "PROPERTY_TYPE", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K9_K10_K1_K7_6_17", columns={"TARGET", "PROPERTY_TYPE", "SPK_PROPERTYID", "NAME_RUS", "ID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K9_K7_K17", columns={"PROPERTY_TYPE", "TARGET", "NAME_RUS", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K9_K10_K7_17", columns={"TARGET", "PROPERTY_TYPE", "NAME_RUS", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K9_K1_K7_K10_6_17", columns={"TARGET", "SPK_PROPERTYID", "NAME_RUS", "PROPERTY_TYPE", "ID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K1_K7_K9_K17_6", columns={"PROPERTY_TYPE", "SPK_PROPERTYID", "NAME_RUS", "TARGET", "SECCODEID", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K17_K10_K9_K7", columns={"SPK_PROPERTYID", "SECCODEID", "PROPERTY_TYPE", "TARGET", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K17_K10_K9_K1", columns={"NAME_RUS", "SECCODEID", "PROPERTY_TYPE", "TARGET", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K9_K1_K17_K7", columns={"PROPERTY_TYPE", "TARGET", "SPK_PROPERTYID", "SECCODEID", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K9_K7_K10_17", columns={"TARGET", "NAME_RUS", "PROPERTY_TYPE", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K9_K1_K17", columns={"PROPERTY_TYPE", "TARGET", "SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K9_K10_K1_17", columns={"TARGET", "PROPERTY_TYPE", "SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K9_K7_K10_K1_6_17", columns={"TARGET", "NAME_RUS", "PROPERTY_TYPE", "SPK_PROPERTYID", "ID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K1_K10_K9_K17_6", columns={"NAME_RUS", "SPK_PROPERTYID", "PROPERTY_TYPE", "TARGET", "SECCODEID", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K9_K1_K7_K17_6", columns={"PROPERTY_TYPE", "TARGET", "SPK_PROPERTYID", "NAME_RUS", "SECCODEID", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K17_K1_K7_K9_6", columns={"PROPERTY_TYPE", "SECCODEID", "SPK_PROPERTYID", "NAME_RUS", "TARGET", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K17_K10_K9", columns={"SPK_PROPERTYID", "SECCODEID", "PROPERTY_TYPE", "TARGET"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K10_K7_K9_K17_6", columns={"SPK_PROPERTYID", "PROPERTY_TYPE", "NAME_RUS", "TARGET", "SECCODEID", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K9_K7_K17_K1_6", columns={"PROPERTY_TYPE", "TARGET", "NAME_RUS", "SECCODEID", "SPK_PROPERTYID", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K7_K17_K10_K9", columns={"NAME_RUS", "SECCODEID", "PROPERTY_TYPE", "TARGET"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K9_K10_K7_K1_17", columns={"TARGET", "PROPERTY_TYPE", "NAME_RUS", "SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K9_K7_K17_K1", columns={"PROPERTY_TYPE", "TARGET", "NAME_RUS", "SECCODEID", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K9_K1_K10_K7_6_17", columns={"TARGET", "SPK_PROPERTYID", "PROPERTY_TYPE", "NAME_RUS", "ID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K10_K9_K1_K17_K7_6", columns={"PROPERTY_TYPE", "TARGET", "SPK_PROPERTYID", "SECCODEID", "NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K17_K10_K9_K7_6", columns={"SPK_PROPERTYID", "SECCODEID", "PROPERTY_TYPE", "TARGET", "NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K9_K1_K10_K7_17", columns={"TARGET", "SPK_PROPERTYID", "PROPERTY_TYPE", "NAME_RUS", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K7_K17_K10_K9_6", columns={"SPK_PROPERTYID", "NAME_RUS", "SECCODEID", "PROPERTY_TYPE", "TARGET", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K17_K10_K1_K7_K9_6", columns={"SECCODEID", "PROPERTY_TYPE", "SPK_PROPERTYID", "NAME_RUS", "TARGET", "ID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K9_K1_K10_6_17", columns={"TARGET", "SPK_PROPERTYID", "PROPERTY_TYPE", "ID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K6_7_9_11_12_15", columns={"SPK_PROPERTYID", "ID", "NAME_RUS", "TARGET", "STATUS", "STATUS_KF", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K17_K1_6_7_8_13_15", columns={"SECCODEID", "SPK_PROPERTYID", "ID", "NAME_RUS", "NAME_ENG", "PARENTID", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RESIDENTIAL_5_1972918100__K1_K17_6_7_9_10_11_12_15", columns={"SPK_PROPERTYID", "SECCODEID", "ID", "NAME_RUS", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "PROPERTY_NUMBER"})})
 * @ORM\Entity
 */
class SpkResidential
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME_RUS", type="string", length=128, nullable=true)
     */
    private $nameRus;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME_ENG", type="string", length=128, nullable=true)
     */
    private $nameEng;

    /**
     * @var string
     *
     * @ORM\Column(name="TARGET", type="string", length=32, nullable=true)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="PROPERTY_TYPE", type="string", length=32, nullable=true)
     */
    private $propertyType;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=64, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS_KF", type="string", length=32, nullable=true)
     */
    private $statusKf;

    /**
     * @var string
     *
     * @ORM\Column(name="PARENTID", type="string", length=12, nullable=true)
     */
    private $parentid;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="string", length=1280, nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="PROPERTY_NUMBER", type="string", length=8, nullable=true)
     */
    private $propertyNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="OLDID", type="string", length=12, nullable=true)
     */
    private $oldid;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UPDATED", type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @var integer
     *
     * @ORM\Column(name="ORD_NEWBUILDING", type="integer", nullable=true)
     */
    private $ordNewbuilding;

    /**
     * @var string
     *
     * @ORM\Column(name="NEWBUILDING", type="string", length=1, nullable=true)
     */
    private $newbuilding;

    /**
     * @var string
     *
     * @ORM\Column(name="DOGOVOR", type="string", length=1, nullable=true)
     */
    private $dogovor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="STARTDATE", type="datetime", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENDDATE", type="datetime", nullable=true)
     */
    private $enddate;

    /**
     * @var string
     *
     * @ORM\Column(name="DOGOVOR_WO_ENDDATE", type="string", length=1, nullable=true)
     */
    private $dogovorWoEnddate;


}
