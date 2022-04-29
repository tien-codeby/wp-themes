<template>
  <ValidationProvider class="form-group row" tag="div" :rules="rules" :name="name" v-slot="{ errors }" :customMessages="customMessages">

    <label
        class="col-3 col-md-2 col-lg-2 col-form-label"
    >
      {{ name }}
      <span v-if="required" class="text-danger" style="font-style: italic; font-size: 13px;">
        (*)</span>:</label>

    <div v-if="$scopedSlots['default']" class="col-9 col-md-8 col-lg-8">
      <slot></slot>
    </div>

    <slot name="full"></slot>

    <div v-if="errors.length" class="col-md-10">
      <span class="help-block help-block-error">
        {{ errors[0] }}
      </span
      ></div>
  </ValidationProvider>
</template>

<script>
import {ValidationProvider} from 'vee-validate';

export default {
  name: 'AdsFormItem',
  components: {
    ValidationProvider
  },
  props: {
    value: {
      type: String,
      default: ''
    },
    label: {
      type: String,
      default: ''
    },
    required: {
      type: Boolean,
      default: false
    },
    rules: {
      type: [String, Object],
      default: ''
    },
    name: {
      type: String,
      default: ''
    },
    customMessages: {
      type: Object,
      default: () => {}
    }
  },
  data: () => ({
    currentValue: ''
  }),
  watch: {
    currentValue(val) {
      // allows us to use v-model on our input.
      this.$emit('input', val);
    }
  }
};
</script>
