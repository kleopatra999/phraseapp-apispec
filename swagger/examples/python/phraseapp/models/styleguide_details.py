# coding: utf-8

"""
    PhraseApp

    PhraseApp API for the interaction with the PhraseApp localization platform

    OpenAPI spec version: 2.0
    Contact: support@phraseapp.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class StyleguideDetails(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """


    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'public_url': 'str',
        'audience': 'str',
        'target_audience': 'str',
        'grammatical_person': 'str',
        'vocabulary_type': 'str',
        'business': 'str',
        'company_branding': 'str',
        'formatting': 'str',
        'glossary_terms': 'str',
        'grammar_consistency': 'str',
        'literal_translation': 'str',
        'overall_tone': 'str',
        'samples': 'str'
    }

    attribute_map = {
        'public_url': 'public_url',
        'audience': 'audience',
        'target_audience': 'target_audience',
        'grammatical_person': 'grammatical_person',
        'vocabulary_type': 'vocabulary_type',
        'business': 'business',
        'company_branding': 'company_branding',
        'formatting': 'formatting',
        'glossary_terms': 'glossary_terms',
        'grammar_consistency': 'grammar_consistency',
        'literal_translation': 'literal_translation',
        'overall_tone': 'overall_tone',
        'samples': 'samples'
    }

    def __init__(self, public_url=None, audience=None, target_audience=None, grammatical_person=None, vocabulary_type=None, business=None, company_branding=None, formatting=None, glossary_terms=None, grammar_consistency=None, literal_translation=None, overall_tone=None, samples=None):
        """
        StyleguideDetails - a model defined in Swagger
        """

        self._public_url = None
        self._audience = None
        self._target_audience = None
        self._grammatical_person = None
        self._vocabulary_type = None
        self._business = None
        self._company_branding = None
        self._formatting = None
        self._glossary_terms = None
        self._grammar_consistency = None
        self._literal_translation = None
        self._overall_tone = None
        self._samples = None
        self.discriminator = None

        if public_url is not None:
          self.public_url = public_url
        if audience is not None:
          self.audience = audience
        if target_audience is not None:
          self.target_audience = target_audience
        if grammatical_person is not None:
          self.grammatical_person = grammatical_person
        if vocabulary_type is not None:
          self.vocabulary_type = vocabulary_type
        if business is not None:
          self.business = business
        if company_branding is not None:
          self.company_branding = company_branding
        if formatting is not None:
          self.formatting = formatting
        if glossary_terms is not None:
          self.glossary_terms = glossary_terms
        if grammar_consistency is not None:
          self.grammar_consistency = grammar_consistency
        if literal_translation is not None:
          self.literal_translation = literal_translation
        if overall_tone is not None:
          self.overall_tone = overall_tone
        if samples is not None:
          self.samples = samples

    @property
    def public_url(self):
        """
        Gets the public_url of this StyleguideDetails.

        :return: The public_url of this StyleguideDetails.
        :rtype: str
        """
        return self._public_url

    @public_url.setter
    def public_url(self, public_url):
        """
        Sets the public_url of this StyleguideDetails.

        :param public_url: The public_url of this StyleguideDetails.
        :type: str
        """

        self._public_url = public_url

    @property
    def audience(self):
        """
        Gets the audience of this StyleguideDetails.

        :return: The audience of this StyleguideDetails.
        :rtype: str
        """
        return self._audience

    @audience.setter
    def audience(self, audience):
        """
        Sets the audience of this StyleguideDetails.

        :param audience: The audience of this StyleguideDetails.
        :type: str
        """

        self._audience = audience

    @property
    def target_audience(self):
        """
        Gets the target_audience of this StyleguideDetails.

        :return: The target_audience of this StyleguideDetails.
        :rtype: str
        """
        return self._target_audience

    @target_audience.setter
    def target_audience(self, target_audience):
        """
        Sets the target_audience of this StyleguideDetails.

        :param target_audience: The target_audience of this StyleguideDetails.
        :type: str
        """

        self._target_audience = target_audience

    @property
    def grammatical_person(self):
        """
        Gets the grammatical_person of this StyleguideDetails.

        :return: The grammatical_person of this StyleguideDetails.
        :rtype: str
        """
        return self._grammatical_person

    @grammatical_person.setter
    def grammatical_person(self, grammatical_person):
        """
        Sets the grammatical_person of this StyleguideDetails.

        :param grammatical_person: The grammatical_person of this StyleguideDetails.
        :type: str
        """

        self._grammatical_person = grammatical_person

    @property
    def vocabulary_type(self):
        """
        Gets the vocabulary_type of this StyleguideDetails.

        :return: The vocabulary_type of this StyleguideDetails.
        :rtype: str
        """
        return self._vocabulary_type

    @vocabulary_type.setter
    def vocabulary_type(self, vocabulary_type):
        """
        Sets the vocabulary_type of this StyleguideDetails.

        :param vocabulary_type: The vocabulary_type of this StyleguideDetails.
        :type: str
        """

        self._vocabulary_type = vocabulary_type

    @property
    def business(self):
        """
        Gets the business of this StyleguideDetails.

        :return: The business of this StyleguideDetails.
        :rtype: str
        """
        return self._business

    @business.setter
    def business(self, business):
        """
        Sets the business of this StyleguideDetails.

        :param business: The business of this StyleguideDetails.
        :type: str
        """

        self._business = business

    @property
    def company_branding(self):
        """
        Gets the company_branding of this StyleguideDetails.

        :return: The company_branding of this StyleguideDetails.
        :rtype: str
        """
        return self._company_branding

    @company_branding.setter
    def company_branding(self, company_branding):
        """
        Sets the company_branding of this StyleguideDetails.

        :param company_branding: The company_branding of this StyleguideDetails.
        :type: str
        """

        self._company_branding = company_branding

    @property
    def formatting(self):
        """
        Gets the formatting of this StyleguideDetails.

        :return: The formatting of this StyleguideDetails.
        :rtype: str
        """
        return self._formatting

    @formatting.setter
    def formatting(self, formatting):
        """
        Sets the formatting of this StyleguideDetails.

        :param formatting: The formatting of this StyleguideDetails.
        :type: str
        """

        self._formatting = formatting

    @property
    def glossary_terms(self):
        """
        Gets the glossary_terms of this StyleguideDetails.

        :return: The glossary_terms of this StyleguideDetails.
        :rtype: str
        """
        return self._glossary_terms

    @glossary_terms.setter
    def glossary_terms(self, glossary_terms):
        """
        Sets the glossary_terms of this StyleguideDetails.

        :param glossary_terms: The glossary_terms of this StyleguideDetails.
        :type: str
        """

        self._glossary_terms = glossary_terms

    @property
    def grammar_consistency(self):
        """
        Gets the grammar_consistency of this StyleguideDetails.

        :return: The grammar_consistency of this StyleguideDetails.
        :rtype: str
        """
        return self._grammar_consistency

    @grammar_consistency.setter
    def grammar_consistency(self, grammar_consistency):
        """
        Sets the grammar_consistency of this StyleguideDetails.

        :param grammar_consistency: The grammar_consistency of this StyleguideDetails.
        :type: str
        """

        self._grammar_consistency = grammar_consistency

    @property
    def literal_translation(self):
        """
        Gets the literal_translation of this StyleguideDetails.

        :return: The literal_translation of this StyleguideDetails.
        :rtype: str
        """
        return self._literal_translation

    @literal_translation.setter
    def literal_translation(self, literal_translation):
        """
        Sets the literal_translation of this StyleguideDetails.

        :param literal_translation: The literal_translation of this StyleguideDetails.
        :type: str
        """

        self._literal_translation = literal_translation

    @property
    def overall_tone(self):
        """
        Gets the overall_tone of this StyleguideDetails.

        :return: The overall_tone of this StyleguideDetails.
        :rtype: str
        """
        return self._overall_tone

    @overall_tone.setter
    def overall_tone(self, overall_tone):
        """
        Sets the overall_tone of this StyleguideDetails.

        :param overall_tone: The overall_tone of this StyleguideDetails.
        :type: str
        """

        self._overall_tone = overall_tone

    @property
    def samples(self):
        """
        Gets the samples of this StyleguideDetails.

        :return: The samples of this StyleguideDetails.
        :rtype: str
        """
        return self._samples

    @samples.setter
    def samples(self, samples):
        """
        Sets the samples of this StyleguideDetails.

        :param samples: The samples of this StyleguideDetails.
        :type: str
        """

        self._samples = samples

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()

    def __eq__(self, other):
        """
        Returns true if both objects are equal
        """
        if not isinstance(other, StyleguideDetails):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
