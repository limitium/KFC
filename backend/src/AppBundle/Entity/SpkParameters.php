<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkParameters
 *
 * @ORM\Table(name="SPK_PARAMETERS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_PARAMETERS_PRIMARY", columns={"SPK_PARAMETERSID"})}, indexes={@ORM\Index(name="SPK_PARAMETERS_SPK_PROPERTYID", columns={"SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_PARAMETERS_5_1671677003__K1_K8_K2_K7_K11_K12", columns={"SPK_PARAMETERSID", "PARAMETER_TYPE", "SPK_PROPERTYID", "PARAMETERID", "COMMENTS", "OPERATOR_NAME"}), @ORM\Index(name="_dta_index_SPK_PARAMETERS_5_1671677003__K11_K12_K1_K2_7_8", columns={"COMMENTS", "OPERATOR_NAME", "SPK_PARAMETERSID", "SPK_PROPERTYID", "PARAMETERID", "PARAMETER_TYPE"}), @ORM\Index(name="_dta_index_SPK_PARAMETERS_5_1671677003__K2_K7_K1_K8_K11_K12", columns={"SPK_PROPERTYID", "PARAMETERID", "SPK_PARAMETERSID", "PARAMETER_TYPE", "COMMENTS", "OPERATOR_NAME"}), @ORM\Index(name="_dta_index_SPK_PARAMETERS_5_1671677003__K11_K12_K1_7_8", columns={"COMMENTS", "OPERATOR_NAME", "SPK_PARAMETERSID", "PARAMETERID", "PARAMETER_TYPE"}), @ORM\Index(name="_dta_index_SPK_PARAMETERS_c_5_1671677003__K11_K12", columns={"COMMENTS", "OPERATOR_NAME"}), @ORM\Index(name="_dta_index_SPK_PARAMETERS_c_5_1671677003__K2_K7", columns={"SPK_PROPERTYID", "PARAMETERID"}), @ORM\Index(name="_dta_index_SPK_PARAMETERS_c_5_1671677003__K1_K8", columns={"SPK_PARAMETERSID", "PARAMETER_TYPE"}), @ORM\Index(name="_dta_index_SPK_PARAMETERS_5_1671677003__K12_K11_K1_7_8", columns={"OPERATOR_NAME", "COMMENTS", "SPK_PARAMETERSID", "PARAMETERID", "PARAMETER_TYPE"}), @ORM\Index(name="_dta_index_SPK_PARAMETERS_5_1671677003__K12_K11_K1_K2_7_8", columns={"OPERATOR_NAME", "COMMENTS", "SPK_PARAMETERSID", "SPK_PROPERTYID", "PARAMETERID", "PARAMETER_TYPE"}), @ORM\Index(name="_dta_index_SPK_PARAMETERS_5_1671677003__K2_K7_K1_K8_K12_K11", columns={"SPK_PROPERTYID", "PARAMETERID", "SPK_PARAMETERSID", "PARAMETER_TYPE", "OPERATOR_NAME", "COMMENTS"}), @ORM\Index(name="_dta_index_SPK_PARAMETERS_5_1671677003__K1_K8_K2_K7_K12_K11", columns={"SPK_PARAMETERSID", "PARAMETER_TYPE", "SPK_PROPERTYID", "PARAMETERID", "OPERATOR_NAME", "COMMENTS"}), @ORM\Index(name="_dta_index_SPK_PARAMETERS_c_5_1671677003__K12_K11", columns={"OPERATOR_NAME", "COMMENTS"})})
 * @ORM\Entity
 */
class SpkParameters
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PARAMETERSID", type="string", length=12, nullable=false)
     */
    private $spkParametersid;

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
     * @var string
     *
     * @ORM\Column(name="PARAMETERID", type="string", length=12, nullable=true)
     */
    private $parameterid;

    /**
     * @var string
     *
     * @ORM\Column(name="PARAMETER_TYPE", type="string", length=16, nullable=true)
     */
    private $parameterType;

    /**
     * @var string
     *
     * @ORM\Column(name="ISEXIST", type="string", length=1, nullable=true)
     */
    private $isexist;

    /**
     * @var string
     *
     * @ORM\Column(name="ISUNKNOWN", type="string", length=1, nullable=true)
     */
    private $isunknown;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="string", length=64, nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATOR_NAME", type="string", length=128, nullable=true)
     */
    private $operatorName;


}
